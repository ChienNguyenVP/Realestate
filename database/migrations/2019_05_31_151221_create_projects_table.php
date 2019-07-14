<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('overview')->nullable();
            $table->string('price')->nullable();
            $table->string('acreage')->nullable();
            $table->string('location')->nullable();
            $table->longText('content')->nullable();
            $table->string('map')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('sold')->nullable();
            $table->bigInteger('view')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
