<?php

namespace App\Http\Livewire\Jabatan;

use App\Models\Jabatans;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class JabatansForm extends Component
{
    use AuthorizesRequests;
    // public $jabatan_id;
    public $nama_jabatan;
    public function render()
    {
        $this->authorize('adminview', Jabatans::class);
        return view('livewire.jabatan.jabatans-form');
    }
    public function store()
    {
        $this->authorize('adminview', Jabatans::class);
        $this->validate([
            'nama_jabatan' => 'required',
        ]);
        $data = [
            'nama_jabatan' => $this->nama_jabatan,
        ];
        Jabatans::create($data);
        $this->nama_jabatan = NULL;
        $this->emit('jabatanStore');
    }
}