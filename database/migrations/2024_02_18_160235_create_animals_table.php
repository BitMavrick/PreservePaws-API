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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->date("updated_date");
            $table->string("image_url");
            $table->string("name");
            $table->string("sci_name")->nullable();
            $table->text("animal_fact")->nullable(); // Describe the reasone why this animal becoming extincts
            $table->string("population_status"); // 1. Endangered, 2. Critically Endangered, 3. Vulnerable, 4. Near Threatened, 5. Least Concern
            $table->text("habitat"); // Brief about where they live
            $table->text("conservation_efforts")->default("Unknown"); // Description of ongoing conservation efforts or initiatives for the species.
            $table->text("threat_factors")->default("Unknown"); // Describe the reasone why this animal becoming extincts
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
        Schema::dropIfExists('animals');
    }
};
