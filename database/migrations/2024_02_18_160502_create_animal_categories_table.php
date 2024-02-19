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
        Schema::create('animal_categories', function (Blueprint $table) {
            $table->id();
            $table->string("category_name"); // 1. Mammals, 2. Birds, 3.Reptiles, 4.Amphibians, 5.Fish, 6.Invertebrates, 7. Unknows
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
        Schema::dropIfExists('animal_categories');
    }
};
