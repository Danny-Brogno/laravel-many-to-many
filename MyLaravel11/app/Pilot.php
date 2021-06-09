<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Pilot extends Model {

  protected $fillable = [

    "firstname",
    "lastname",
    "age",
  ];

  public function cars() {

    return $this -> belongsToMany(Car::class);

  }
  
}
