<?php

namespace App\Http\Livewire\Jabatan;

use App\Models\Jabatans;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class JabatansTable extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    protected $paginationTheme = 'bootstrap';

    public $jabatan_id;
    public $nama_jabatan;

    protected $listeners = ['jabatanStore'=>'render', 'jabatanDestroy'=>'jabatanDestroyer'];


    public function render()
    {
        $this->authorize('adminview', Jabatans::class);
        return view('livewire.jabatan.jabatans-table',[
            'jabatans' => Jabatans::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function jabatanEdit($jabatan)
    {
        $this->authorize('adminview', Jabatans::class);
        $this->jabatan_id = $jabatan['id'];
        $this->nama_jabatan = $jabatan['nama_jabatan'];
    }

    public function jabatanUpdate()
    {
        $this->authorize('adminview', Jabatans::class);
        $this->validate([
            'nama_jabatan' => 'required',
        ]);

        $data = [
            'nama_jabatan' => $this->nama_jabatan,
        ];
        
        Jabatans::where('id', $this->jabatan_id)->update($data);
        $this->jabatan_id = NULL;
        $this->nama_jabatan = NULL;
        $this->emit('jabatanStore');
    }

    public function jabatanDelete($id)
    {
        $this->authorize('adminview', Jabatans::class);
        $this->jabatan_id = $id;
        
        $jabatan = Jabatans::find($id);
        $this->dispatchBrowserEvent('jabatanDeleteConfirmation', ['jabatan' => $jabatan]);
    }

    public function jabatanDestroyer()
    {
        $this->authorize('adminview', Jabatans::class);
        Jabatans::find($this->jabatan_id)->delete();
    }
}