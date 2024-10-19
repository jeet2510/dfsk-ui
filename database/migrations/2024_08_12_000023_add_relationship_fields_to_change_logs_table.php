<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToChangeLogsTable extends Migration
{
    public function up()
    {
        Schema::table('change_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_10015763')->references('id')->on('users');
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('page_id', 'page_fk_10015764')->references('id')->on('pages');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id', 'section_fk_10015765')->references('id')->on('sections');
            $table->unsignedBigInteger('value_id')->nullable();
            $table->foreign('value_id', 'value_fk_10015766')->references('id')->on('values');
        });
    }
}
