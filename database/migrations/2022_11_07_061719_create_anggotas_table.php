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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 45);
            $table->string('email_address', 45);
            $table->char('no_hp', 13);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->string('alamat', 45);
            $table->foreignId('divises_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('jabatans_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('nik', 45);
            $table->string('no_karyawan', 45);
            $table->date('tanggal_bergabung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};