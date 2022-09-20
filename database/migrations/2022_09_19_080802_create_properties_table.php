<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->json("images")->nullable();
            $table->string("sell_type");
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("agency_id")->constrained()->cascadeOnDelete();
            $table->foreignId("city_id")->constrained()->cascadeOnDelete();
            $table->foreignId("country_id")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
        /* Schema::table('properties', function (Blueprint $table) {
             $table->foreign('user_id')->references('id')->on('users');
             $table->foreign('agency_id')->references('id')->on('agencies');
             $table->foreign('city_id')->references('id')->on('cities');
             $table->foreign('country_id')->references('id')->on('countries');
         });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
