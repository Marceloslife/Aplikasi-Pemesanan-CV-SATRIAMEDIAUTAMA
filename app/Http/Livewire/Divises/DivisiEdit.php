<?php

namespace App\Http\Livewire\Divises;

use App\Models\Divisis;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class DivisiEdit extends Component
{
    use AuthorizesRequests;
    public function render()
    {
        $this->authorize('adminview', Divisis::class);
        return view('livewire.divises.divisi-edit');
    }
}