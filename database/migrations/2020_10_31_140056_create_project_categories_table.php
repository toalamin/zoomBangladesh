<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_categories', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('location');
            $table->text('short_description');
            $table->longText('description');
            $table->string('raise')->default(0);
            $table->string('success')->default(0);
            $table->string('goal');
            $table->string('global')->default(0);
            $table->boolean('visible')->default(1)->comment('1=RUNNING,2=Complete,3=inactive');
            $table->softDeletes();
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
        Schema::dropIfExists('project_categories');
    }
}
