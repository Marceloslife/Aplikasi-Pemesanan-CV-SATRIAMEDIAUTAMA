<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\anggotas;
use App\Models\Divisis;
use App\Models\Jabatans;
use App\Models\Layanans;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        Layanans::create([
            'nama_layanan' => 'SHOW MANAGEMENT'
        ]);

        Layanans::create([
            'nama_layanan' => '360 VIDEOBOOTH EXPERINCE'
        ]);

        Layanans::create([
            'nama_layanan' => 'DEKORASI STAND & PRODUKSI'
        ]);


        Divisis::create([
            'nama_divisi' => 'DEKORASI STAND & PRODUKSI'
        ]);

        Divisis::create([
            'nama_divisi' => '360 VIDEOBOOTH EXPERINCE'
        ]);
        Jabatans::create([
            'nama_jabatan' => 'Anggota Divisi'
        ]);
        Jabatans::create([
            'nama_jabatan' => 'Ketua Divisi'
        ]);
    }
}