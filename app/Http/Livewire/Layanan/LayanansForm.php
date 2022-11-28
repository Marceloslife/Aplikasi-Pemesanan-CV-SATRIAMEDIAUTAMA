<?php

namespace App\Http\Livewire\Layanan;

use App\Models\layanans;
use Livewire\Component;

class LayanansForm extends Component
{
    public $layanan_id;
    public $nama_layanan;
    public function render()
    {
        return view('livewire.layanan.layanans-form');
    }
    public function store()
    {
        $this->validate([
            'nama_layanan' => 'required',
        ]);
        $data = [
            'nama_layanan' => $this->nama_layanan,
        ];
        layanans::create($data);
        $this->nama_layanan = NULL;
        $this->emit('layananStore');
    }
}