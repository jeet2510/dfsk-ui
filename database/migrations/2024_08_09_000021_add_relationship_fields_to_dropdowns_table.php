<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDropdownsTable extends Migration
{
    public function up()
    {
        Schema::table('dropdowns', function (Blueprint $table) {
            $table->unsignedBigInteger('site_id')->nullable();
            $table->foreign('site_id', 'site_fk_9476011')->references('id')->on('sites');
        });
    }
}
