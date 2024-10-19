<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigValuesTable extends Migration
{
    public function up()
    {
        Schema::create('config_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
