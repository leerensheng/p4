<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnitureAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furniture_assets', function (Blueprint $table) {

            $table->increments('id');

            $table->timestamps();

            $table->string('name');
            $table->string('description');
            $table->integer('purchase_price');
            $table->date('purchase_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('furniture_assets');
    }
}
