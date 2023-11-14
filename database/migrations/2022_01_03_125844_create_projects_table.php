<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->uuid('id')->primary();
            $table->string('project_title');
            $table->string('site_name');
            $table->string('site_location')->nullable();
            $table->string('project_durations')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('ending_date')->nullable();
            $table->text('description1');
            $table->text('description2')->nullavble();
            $table->string('sample_image');
            $table->string('more_image')->nullable();
            $table->timestamps();
            $table->tinyInteger('status')->default('0');
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
