<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('language_code')->nullable();
            $table->string('url')->nullable();
            $table->boolean('isdefault')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
