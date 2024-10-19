<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPagesTable extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->unsignedBigInteger('site_id')->nullable();
            $table->foreign('site_id', 'site_fk_9476005')->references('id')->on('sites');
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('page_id', 'page_fk_9571881')->references('id')->on('pages');
        });
    }
}
