<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment('team category id');
            $table->string('divission');
            $table->string('district');
            $table->string('gender');
            $table->string('blood');
            $table->string('branch_id');
            $table->string('image');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('facebook');
            $table->string('instagram')->nullable();
            $table->string('linked')->nullable();
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('education');
            $table->string('last_institution');
           // $table->string('designation');
            $table->longText('description_yourself');
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
        Schema::dropIfExists('members');
    }
}
