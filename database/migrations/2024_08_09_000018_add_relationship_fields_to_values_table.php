<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToValuesTable extends Migration
{
    public function up()
    {
        Schema::table('values', function (Blueprint $table) {
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id', 'section_fk_9475825')->references('id')->on('sections');
        });
    }
}
