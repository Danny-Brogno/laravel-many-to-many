<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class testController extends Controller {

  public function home() {

    $cars = Car::all();
    return view("pages.home", compact("cars"));
  }

  public function show($id) {

    $car = Car::findOrFail($id);

    return view("pages.show", compact("cars"));
  }

}
