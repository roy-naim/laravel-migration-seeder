<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Travels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('travels', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->string('city');
        $table->string('state');
        $table->string('airline');
        $table->string('hotel_name');
        $table->tinyInteger('rooms')->unsigned();
        $table->string('european_citizen', true);
        $table->smallInteger('price');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
