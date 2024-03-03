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
            $table->integer('type_id');
            $table->date("updated_date");
            $table->string("image_url");
            $table->string("name");
            $table->string("sci_name");
            $table->text("animal_fact");
            $table->string("population_status");
            $table->integer("population_count_est");
            $table->text("habitat")->nullable();
            $table->text("conservation_efforts")->nullable();
            $table->text("threat_factors")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
