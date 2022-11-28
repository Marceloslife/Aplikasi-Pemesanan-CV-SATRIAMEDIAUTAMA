<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\anggotas;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        anggotas::create([
            'nama'=>'irfan',
            'email_address'=>'irfan@gmail.com',
            'no_hp'=>'0812323456745',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2012-10-21',
            'status' => 'aktif',
            'alamat' => 'jl.rajawali',
            'divises_id'=>'1',
            'jabatans_id' => '1',
            'nik' =>'201201020111010',
            'no_karyawan' => '210121833210',
            'tanggal_bergabung' => '2020-10-21',
        ]);
    }
}