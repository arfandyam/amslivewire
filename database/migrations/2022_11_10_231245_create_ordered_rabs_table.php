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
        Schema::create('ordered_rabs', function (Blueprint $table) {
            $table->id();
            $table->string('rab_id');
            $table->string('kategori_ordered');
            $table->string('item_ordered');
            $table->string('satuan');
            $table->integer('volume');
            $table->string('harga_satuan');
            $table->string('harga');
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
        Schema::dropIfExists('ordered_rabs');
    }
};
