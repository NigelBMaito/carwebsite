<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){

       // $car = Car::find(1);

       // dd($car->features, $car->primaryImage);
      //  $car->features->save();

      //  $car->features->abs = 0;
        //$car->features->save();

      //  $car = Car::find(1);

      //Create new Image
      //$image = new CarImage(['image_path' => 'something', 'position'=> '2']);
     // $car->images()->save($image);

     // $car ->images()->create(['image_path' => 'something', 'position'=> '2']);

      // $car ->images()->saveMany([ 
      //   new CarImage(['image_path' => 'something', 'position'=> '3']),
      //   new CarImage(['image_path' => 'something', 'position'=> '4']),
      // ]);

      // $car->images()->createMany([
      //   ['image_path' => 'something', 'position'=> '5'],
      //   ['image_path' => 'something', 'position'=> '6'],
      // ]);

      //dd($car->carType);

    //  $car = Car::find(1);

      //dd($car->favouredUsers);
      // $carType = CarType::where('name', 'Sedan')->first();

      // $car->car_type_id = $carType->id;
      // $car->save();

      // $car->carType()->associate($carType);
      // $car->save();
      
  

      //$cars = $carType ->cars;
     // $cars = Car::whereBelongsTo($carType)->get();

      //dd($cars);

      // $maker = Maker::factory ()->count(10)-> create();
      // dd($maker);

      // User::factory()->count(10)->create([
      //   "name"=> "Nigel",
      // ]);

      // Maker::factory()
      // ->count(5)
      // ->create();

    //  $maker = Maker::factory()
    //   ->count(5)
    //   ->hasModels(5)
    //   ->create();

    //   Maker::factory()
    // ->count(5)
    // ->has(Model::factory()->count(5), 'models') // Correct usage
    // ->create();

    User::factory()
      ->has(Car::factory()->count(5),'favouriteCars')
      ->create();

    Maker::factory()->create();

    



         return view("home.index");
        
    }
}
