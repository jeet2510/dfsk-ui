<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropdownsTable extends Migration
{
    public function up()
    {
        Schema::create('dropdowns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group');
            $table->integer('sortorder')->nullable();
            $table->string('title');
            $table->string('value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
