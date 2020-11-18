<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_category_id');
            $table->string('divission');
            $table->string('district');
            $table->string('gender');
            $table->string('blood');
            $table->string('full_name');
            $table->string('present_address');
            $table->string('phone');
            $table->string('email');
            $table->string('designation');
            $table->string('branch');
            $table->string('fb_link');
            $table->string('insta_link');
            $table->text('short_description');
            $table->string('image');
            $table->boolean('visibility');
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
        Schema::dropIfExists('teams');
    }
}
