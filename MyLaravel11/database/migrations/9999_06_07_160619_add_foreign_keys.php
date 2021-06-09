<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema::table('cars', function (Blueprint $table) {

        $table -> foreign("brand_id", "car_brand") -> references("id") -> on("brands");

      });

      Schema::table('car_pilot', function (Blueprint $table) {

        $table -> foreign("pilot_id", "carPilot") -> references("id") -> on("pilots");
        $table -> foreign("car_id", "pilotCar") -> references("id") -> on("cars");

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema::create('cars', function (Blueprint $table) {

        $table -> dropForeign("carBrand");

      });

      Schema::create('car_pilot', function (Blueprint $table) {

        $table -> dropForeign("carPilot");
        $table -> dropForeign("pilotCar");

      });
    }
}
