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
            $table->boolean('Is_featured')->nullable();
            $table->string('path')->nullable();
            $table->string('extension')->nullable();
            $table->double('size')->nullable();
            $table->string('name')->nullable();
            $table->string('actual_name')->nullable();
            
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
