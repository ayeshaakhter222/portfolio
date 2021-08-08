<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->morphs('attachmentable');
            $table->boolean('is_featured');
            $table->string('path');
            $table->string('extension');
            $table->double('size');
            $table->string('name');
            $table->string('actual_name');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::dropIfExists('attachments');
        //_experience
    }
}
