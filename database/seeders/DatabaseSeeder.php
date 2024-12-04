<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //Create car types with the following data using factories
        /*
        [
        'Sedan',
        'Hatchback',
        'Coupe',	
        'Sportscars',	
        'Station wagon',
        'Convertible'	
        'SUV'
        'Minivan'
        'Pickup truck',	
        'Jeep',	
        'Crossover',
        'Sports Car'

        ]

        */

        CarType::factory()
        ->sequence([
        ['name' => 'Sedan',],
        ['name' =>'Hatchback',],
        ['name' =>'Coupe',],	
        ['name' => 'Sportscars',],	
        ['name' =>  'Station wagon',],
        ['name' => 'Convertible',],	
        ['name' => 'SUV',],
        ['name' =>'Minivan',],
        ['name' =>'Pickup truck',],
        ['name' => 'Jeep',],	
        ['name' =>'Crossover',],
        ['name' =>'Sports Car']



        ])
        ->count(12)
        ->create();
        // Create fuel types
        // ['Gasoline', 'Diesel', 'Electric', 'Hybrid']

        FuelType::factory()
        ->sequence([
            ['name'=> 'Gasoline',],
            ['name'=> 'Diesel',],
            ['name'=> 'Electric',],
            ['name'=> 'Hybrid',],
        ])
        ->count(4)
        ->create();

        //Create States with cities
        $states = [
            'Mashonaland East' => ['Marondera', 'Chikomba', 'Goromonzi', 'Mudzi', 'Murehwa', 'Mutoko', 'Seke', 'Uzumba-Maramba-Pfungwe', 'Wedza'],
            'Mashonaland West'=> ['Kariba', 'Sanyati', 'Zvimba', 'Chegutu', 'Makonde', 'Mhondoro', 'Ngezi', 'Hurungwe'],
            'Harare'=> ['Harare','Ruwa','Epworth','Chitungwiza'],
            'Matebeleland North'=>[ 'Binga', 'Bubi', 'Hwange', 'Nkayi', 'Lupane', 'Tsholotsho', 'Umguza'],
            'Matebeleland South'=>['Beitbridge', 'Bulilima', 'Gwanda', 'Insiza', 'Mangwe', 'Matobo', 'Umzingwane' ],
            'Bulawayo'=>['Bulawayo Central', 'Bulawayo West', 'Bulawayo Suburban', 'Nkulumane'],
            'Manicaland'=>[ 'Buhera', 'Chimanimani', 'Chipinge', 'Makoni', 'Mutare', 'Mutasa', 'Nyanga', 'Mutare', 'Chipinge', 'Rusape']
            ];

            foreach ($states as $state => $cities) {
                State::factory()
                ->state(['name'=> $state])
                ->has(
                    City::factory()
                    ->count(count($cities))
                    ->sequence(array_map(fn($city) => ['name' =>$city], $cities))
                )
                ->create();

                }


    }
}
