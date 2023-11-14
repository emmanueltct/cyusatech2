<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('project_id')->nullable;
            $table->string('project_title')->nullable;
            $table->text('comments');
            $table->string('company_logo');
            $table->string('status')->default('Disabled');
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
        Schema::dropIfExists('testimonials');
    }
}
