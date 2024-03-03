<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('type'); // * Type is the sub-category of Category
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
};
