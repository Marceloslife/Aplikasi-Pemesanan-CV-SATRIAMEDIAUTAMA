<?php

namespace App\Http\Livewire\Layanan;

use App\Models\Layanans;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class LayanansForm extends Component
{
    use AuthorizesRequests;
    public $layanan_id;
    public $nama_layanan;
    public function render()
    {
        $this->authorize('adminview', Layanans::class);
        return view('livewire.layanan.layanans-form');
    }
    public function store()
    {
        $this->authorize('adminview', Layanans::class);
        $this->validate([
            'nama_layanan' => 'required',
        ]);
        $data = [
            'nama_layanan' => $this->nama_layanan,
        ];
        Layanans::create($data);
        $this->nama_layanan = NULL;
        $this->emit('layananStore');
    }
}