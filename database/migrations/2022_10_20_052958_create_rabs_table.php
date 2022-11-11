<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabs', function (Blueprint $table) {
            $table->id();
            $table->string('rab_id');            
            $table->string('nomor_po');            
            $table->string('nomor_kontrak_induk');          
            $table->string('nomor_skk');
            $table->string('nomor_prk');
            $table->string('pekerjaan');
            $table->string('lokasi');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('direksi_pekerjaan');
            $table->string('pengawas_pekerjaan');            
            $table->string('total_harga');            
            $table->timestamps();            
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rabs');
    }
};
