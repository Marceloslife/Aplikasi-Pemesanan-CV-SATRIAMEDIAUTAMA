<?php

namespace App\Http\Livewire\Divises;

use App\Models\divisis;
use Livewire\Component;

class DivisiForm extends Component
{
    public $divisi_id;
    public $nama_divisi;
    public function render()
    {
        return view('livewire.divises.divisi-form');
    }
    public function store()
    {
        $this->validate([
            'nama_divisi' => 'required',
        ]);
        $data = [
            'nama_divisi' => $this->nama_divisi,
        ];
        divisis::create($data);
        $this->nama_divisi = NULL;
        $this->emit('divisiStore');
    }
}