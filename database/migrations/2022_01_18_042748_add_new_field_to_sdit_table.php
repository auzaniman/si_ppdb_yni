<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldToSditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sdit', function (Blueprint $table) {
            $table->text('image_pembayaran');
            $table->text('image_kk');
            $table->text('image_ktp');
            $table->text('image_akta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sdit', function (Blueprint $table) {
             $table->dropColumn('image_pembayaran');
             $table->dropColumn('image_kk');
             $table->dropColumn('image_ktp');
             $table->dropColumn('image_akta');
        });
    }
}
