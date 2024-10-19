<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commonname')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->integer('sortorder')->nullable();
            $table->boolean('is_page')->default(0)->nullable();
            $table->string('showinheader')->nullable();
            $table->string('showinfooter')->nullable();
            $table->string('page_url')->nullable();
            $table->string('published')->nullable();
            $table->string('metatitle')->nullable();
            $table->string('metadescription')->nullable();
            $table->string('metakeywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
