<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('tech_assets', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->string('serial_number');
            $table->string('manufacturer');
            $table->string('model');
            $table->date('purchase_date');
            $table->integer('purchase_price');
            $table->string('cpu');
            $table->integer('ram');
            $table->integer('storage_size');
            $table->date('warranty_expiration');


            # FYI: We're skipping the 'tags' field for now; more on that later.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tech_assets');
    }
}
