<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBussinessIdToRoutesTable extends Migration
{
    public function up()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->integer('business_id')->unsigned();
            $table->foreign('business_id')->references('id')->on('businesses');
        });
    }

    public function down()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->dropForeign(['business_id']);
            $table->dropColumn('business_id');
        });
    }
}
