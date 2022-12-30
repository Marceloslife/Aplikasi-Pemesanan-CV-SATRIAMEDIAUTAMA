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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_event', 45);
            $table->string('penyelenggara', 45);
            $table->dateTime('tgl_dari');
            $table->dateTime('tgl_sampai'); 
            $table->string('lokasi_event', 100);
            $table->char('no_hp_penyelenggara', 13);
            $table->string('email_penyelenggara', 45);
            $table->string('status', 45);
            // $table->string('layanan');

            // $table->foreignId('layanan_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void``
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};