<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create car types
        CarType::factory()
            ->sequence(
                ['name' => 'Sedan'],
                ['name' => 'Hatchback'],
                ['name' => 'Coupe'],
                ['name' => 'Sportscars'],
                ['name' => 'Station wagon'],
                ['name' => 'Convertible'],
                ['name' => 'SUV'],
                ['name' => 'Minivan'],
                ['name' => 'Pickup truck'],
                ['name' => 'Jeep'],
                ['name' => 'Crossover'],
                ['name' => 'Sports Car'],
            )
            ->count(12)
            ->create();

        // Create fuel types
        FuelType::factory()
            ->sequence(
                ['name' => 'Gasoline'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Hybrid'],
            )
            ->count(4)
            ->create();

        // Create states and their cities
        $states = [
            'Mashonaland East' => ['Marondera', 'Chikomba', 'Goromonzi', 'Mudzi', 'Murehwa', 'Mutoko', 'Seke', 'Uzumba-Maramba-Pfungwe', 'Wedza'],
            'Mashonaland West' => ['Kariba', 'Sanyati', 'Zvimba', 'Chegutu', 'Makonde', 'Mhondoro', 'Ngezi', 'Hurungwe'],
            'Harare' => ['Harare', 'Ruwa', 'Epworth', 'Chitungwiza'],
            'Matebeleland North' => ['Binga', 'Bubi', 'Hwange', 'Nkayi', 'Lupane', 'Tsholotsho', 'Umguza'],
            'Matebeleland South' => ['Beitbridge', 'Bulilima', 'Gwanda', 'Insiza', 'Mangwe', 'Matobo', 'Umzingwane'],
            'Bulawayo' => ['Bulawayo Central', 'Bulawayo West', 'Bulawayo Suburban', 'Nkulumane'],
            'Manicaland' => ['Buhera', 'Chimanimani', 'Chipinge', 'Makoni', 'Mutare', 'Mutasa', 'Nyanga', 'Rusape'],
        ];

        foreach ($states as $state => $cities) {
            State::factory()
                ->state(['name' => $state])
                ->has(
                    City::factory()
                        ->count(count($cities))
                        ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
                )
                ->create();
        }

        // Create makers and their models
        $makers = [
            "MercedesBenz" => ["C-Class", "E-Class", "S-Class", "GLA", "GLE", "GLS"],
            "BMW" => ["3 Series", "5 Series", "7 Series", "X3", "X5", "i4"],
            "Audi" => ["A3", "A4", "A6", "Q5", "Q7", "e-tron"],
            "Toyota" => ["Corolla", "Camry", "RAV4", "Land Cruiser", "Hilux", "Yaris"],
            "VW" => ["Golf", "Polo", "Tiguan", "Passat", "Touareg", "ID.4"],
            "Ford" => ["Fiesta", "Focus", "Mustang", "Explorer", "Ranger", "F-150"],
            "LandRover" => ["Range Rover", "Discovery", "Defender", "Evoque", "Velar"],
            "Honda" => ["Civic", "Accord", "CR-V", "HR-V", "Pilot", "Fit"],
            "Nissan" => ["Altima", "Maxima", "Rogue", "Pathfinder", "Navara", "GT-R"],
        ];
        

        foreach ($makers as $maker => $models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    Model::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create();
        }

        // Create users with cars
        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(fn($sequence) => ['position' => $sequence->index % 5 + 1]),
                            'images'
                    )
                    ->hasFeatures(),
                'favouriteCars'
            )
            ->create();

        User::factory()
            ->count(3)
            ->create();
    }
}
