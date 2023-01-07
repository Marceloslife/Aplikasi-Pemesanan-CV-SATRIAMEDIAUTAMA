<?php

namespace App\Http\Livewire\Layanan;

use App\Models\Layanans;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class LayanansTable extends Component
{
    
   use WithPagination;
   use AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';

    public $layanan_id;
    public $nama_layanan;

    protected $listeners = ['layananStore'=>'render', 'layananDestroy'=>'layananDestroyer'];


    public function render()
    {
        $this->authorize('adminview', Layanans::class);
        return view('livewire.layanan.layanans-table',[
            'layanans' => Layanans::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function layananEdit($layanan)
    {
        $this->authorize('adminview', Layanans::class);
        $this->layanan_id = $layanan['id'];
        $this->nama_layanan = $layanan['nama_layanan'];
    }

    public function layananUpdate()
    {
        $this->authorize('adminview', Layanans::class);
        $this->validate([
            'nama_layanan' => 'required',
        ]);

        $data = [
            'nama_layanan' => $this->nama_layanan,
        ];
        
        Layanans::where('id', $this->layanan_id)->update($data);
        $this->layanan_id = NULL;
        $this->nama_layanan = NULL;
        $this->emit('layananStore');
    }

    public function layananDelete($id)
    {
        $this->authorize('adminview', Layanans::class);
        $this->layanan_id = $id;
        
        $layanan = Layanans::find($id);
        $this->dispatchBrowserEvent('layananDeleteConfirmation', ['layanan' => $layanan]);
    }

    public function layananDestroyer()
    {
        $this->authorize('adminview', Layanans::class);
        Layanans::find($this->layanan_id)->delete();
    }
}