<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->longText('about_me')->nullable();
            $table->string('phone')->nullable();
            $table->string('secondary_email')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('present_address')->nullable();
            $table->string('designation')->nullable();
            $table->char('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('religion')->nullable();
            $table->integer('blood_group')->nullable();
            $table->integer('marital status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { Schema::dropIfExists('profiles');
        //
    }
}
