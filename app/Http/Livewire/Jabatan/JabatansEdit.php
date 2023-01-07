<?php

namespace App\Http\Livewire\Jabatan;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class JabatansEdit extends Component
{
    use AuthorizesRequests;
    public function render()
    {
        $this->authorize('adminview', Jabatans::class);
        return view('livewire.jabatan.jabatans-edit');
    }
}