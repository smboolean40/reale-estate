<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string("code", 10)->unique();
            $table->string("address", 100);
            $table->string("postal_code", 15);
            $table->string("city", 50);
            $table->string("state", 50);
            $table->unsignedSmallInteger('sqm');
            $table->tinyInteger("rooms")->unsigned();
            $table->tinyInteger("bathrooms")->unsigned();
            $table->float('price', 10, 2);
            $table->text("description");
            $table->year('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
