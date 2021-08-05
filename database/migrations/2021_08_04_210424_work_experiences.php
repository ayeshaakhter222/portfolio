<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->date('employment_period_from')->nullable();
            $table->date('employment_period_to')->nullable();
            $table->text('company_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { Schema::dropIfExists('work_experiences');
        //
    }
}
