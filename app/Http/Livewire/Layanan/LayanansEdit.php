<?php

namespace App\Http\Livewire\Layanan;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class LayanansEdit extends Component
{
    use AuthorizesRequests;
    public function render()
    {
        $this->authorize('adminview', Layanans::class);
        return view('livewire.layanan.layanans-edit');
    }
}