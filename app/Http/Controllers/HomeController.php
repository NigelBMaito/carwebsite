<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;
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

        $car = Car::find(1);

      //Create new Image
      $image = new CarImage(['image_path' => 'something', 'position'=> '2']);
      $car->images()->save($image);


         return view("home.index");
        
    }
}
