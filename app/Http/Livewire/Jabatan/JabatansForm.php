<?php

namespace App\Http\Livewire\Jabatan;

use App\Models\jabatans;
use Livewire\Component;

class JabatansForm extends Component
{
    // public $jabatan_id;
    public $nama_jabatan;
    public function render()
    {
        return view('livewire.jabatan.jabatans-form');
    }
    public function store()
    {
        $this->validate([
            'nama_jabatan' => 'required',
        ]);
        $data = [
            'nama_jabatan' => $this->nama_jabatan,
        ];
        jabatans::create($data);
        $this->nama_jabatan = NULL;
        $this->emit('jabatanStore');
    }
}