<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('sortorder')->nullable();
            $table->string('published');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
