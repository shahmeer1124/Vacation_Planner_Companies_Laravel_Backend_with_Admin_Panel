<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_info', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("img");
            $table->integer("price");
            $table->integer("people")->default(0);
            $table->integer("stars");
            $table->string("description");
            $table->string("location");
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
        Schema::dropIfExists('travel_info');
    }
};
