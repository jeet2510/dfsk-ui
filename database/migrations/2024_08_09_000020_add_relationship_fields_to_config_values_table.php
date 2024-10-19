<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToConfigValuesTable extends Migration
{
    public function up()
    {
        Schema::table('config_values', function (Blueprint $table) {
            $table->unsignedBigInteger('site_id')->nullable();
            $table->foreign('site_id', 'site_fk_9476012')->references('id')->on('sites');
        });
    }
}
