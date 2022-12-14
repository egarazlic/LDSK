<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSoldAdsAndDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ads', function (Blueprint $table) {
            $table->boolean("sold")->default(false);
            $table->date('sold_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn("sold");
            $table->dropColumn("sold_at");
        });
    }
}
