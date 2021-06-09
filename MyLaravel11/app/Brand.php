<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Brand extends Model {

  protected $fillable = [

    "brand_name",
    "nationality",
    "symbol",

  ];

  public function cars() {
    return $this -> hasMany(Car::class);
  }

}
