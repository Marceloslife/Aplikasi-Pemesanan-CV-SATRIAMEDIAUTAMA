<?php

namespace App\Http\Livewire\Divises;

use App\Models\Divisis;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class DivisiForm extends Component
{
    use AuthorizesRequests;
    public $divisi_id;
    public $nama_divisi;
    public function render()
    {
        return view('livewire.divises.divisi-form');
    }
    public function store()
    {
        $this->authorize('adminview', Divisis::class);
        $this->validate([
            'nama_divisi' => 'required',
        ]);
        $data = [
            'nama_divisi' => $this->nama_divisi,
        ];
        Divisis::create($data);
        $this->nama_divisi = NULL;
        $this->emit('divisiStore');
    }
}