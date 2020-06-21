<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->foreignID('user_id')->constrained();
            $table->string('description', 200);
            $table->string('prep', 10);
            $table->string('cook', 10);
            $table->string('difficulty', 8);
            $table->integer('serves');
            $table->string('ingredients', 10000);
            $table->string('preparation', 10000);
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
        Schema::dropIfExists('recipes');
    }
}
