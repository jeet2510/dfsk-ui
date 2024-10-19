<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSectionsTable extends Migration
{
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('page_id', 'page_fk_9475818')->references('id')->on('pages');
            $table->unsignedBigInteger('template_id')->nullable();
            $table->foreign('template_id', 'template_fk_9475819')->references('id')->on('templates');
						$table->unsignedBigInteger('section_id')->nullable();
						$table->foreign('section_id', 'section_fk_8886214')->references('id')->on('sections');
        });
    }
}
