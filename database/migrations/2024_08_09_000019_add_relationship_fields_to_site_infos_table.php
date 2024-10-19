<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSiteInfosTable extends Migration
{
    public function up()
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('site_id')->nullable();
            $table->foreign('site_id', 'site_fk_9476010')->references('id')->on('sites');
        });
    }
}
