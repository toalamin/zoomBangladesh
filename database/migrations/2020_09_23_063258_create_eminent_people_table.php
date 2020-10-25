<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEminentPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eminent_people', function (Blueprint $table) {
            $table->id();
            $table->string('name',55)->unique();
            $table->string('email',55)->unique();
            $table->string('phone',30)->unique();
            $table->string('designation');
            $table->text('short_description');
            $table->string('fb_link')->unique();
            $table->string('linkedin')->unique();
            $table->string('instagram')->unique();
            $table->text('image');
            $table->boolean('visibility')->default(0);
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
        Schema::dropIfExists('eminent_people');
    }
}
