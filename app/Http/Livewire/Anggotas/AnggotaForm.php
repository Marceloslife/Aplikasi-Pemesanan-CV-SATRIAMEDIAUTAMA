<?php

namespace App\Http\Livewire\Anggotas;

use App\Models\anggotas;
use Livewire\Component;

class AnggotaForm extends Component
{
    public $anggotas_id;
    public $nama;
    public $email_address;
    public $no_hp;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $status;
    public $alamat;
    public $divises_id;
    public $jabatan_id;
    public $nik;
    public $no_karyawan;
    public $tanggal_bergabung;
    public function render()
    {
        return view('livewire.anggotas.anggota-form');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'email_address' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'divises_id'=> 'required',
            'jabatans_id' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'nik' => 'required',
            'no_karyawan' => 'required',
            'tanggal_bergabung' => 'required'
        ]);
        $data = [
            'nama' => $this->nama,
            'email_address' => $this->email_address,
            'no_hp' => $this->no_hp,
            'jenis_kelamin' => $this->jenis_kelamin,
            'divises_id' => $this->divises_id,
            'jabatans_id' => $this->jabatans_id,
            'tanggal_lahir' => $this->tanggal_lahir,
            'status' => $this->status,
            'nik' => $this->nik,
            'no_karyawan' => $this->no_karyawan,
            'tanggal_bergabung' => $this->tanggal_bergabung,
        ];
        anggotas::create($data);
        $this->anggota_id = NULL;
        $this->nama = NULL;
        $this->email_address = NULL;
        $this->no_hp = NULL;
        $this->jenis_kelamin = NULL;
        $this->divises_id = NULL;
        $this->jabatans_id = NULL;
        $this->tanggal_lahir = NULL;
        $this->status = NULL;
        $this->nik = NULL;
        $this->no_karyawan = NULL;
        $this->tanggal_bergabung = NULL;
        $this->emit('productStore');
    }
}