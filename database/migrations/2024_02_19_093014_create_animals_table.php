<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->date("updated_date");
            $table->string("image_url");
            $table->string("name");
            $table->string("sci_name");
            $table->string("category"); // 1. Mammals, 2. Birds, 3.Reptiles, 4.Amphibians, 5.Fish, 6.Invertebrates, 7. Unknows
            $table->string("type"); // type is the subcategory
            $table->text("animal_fact");
            $table->string("population_status");
            $table->integer("population_count_est");
            $table->text("habitat");
            $table->text("conservation_efforts");
            $table->text("threat_factors");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
