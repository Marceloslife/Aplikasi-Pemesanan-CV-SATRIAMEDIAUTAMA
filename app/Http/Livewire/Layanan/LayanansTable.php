<?php

namespace App\Http\Livewire\Layanan;

use App\Models\layanans;
use Livewire\Component;
use Livewire\WithPagination;

class LayanansTable extends Component
{
   use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $layanan_id;
    public $nama_layanan;

    protected $listeners = ['layananStore'=>'render', 'layananDestroy'=>'layananDestroyer'];


    public function render()
    {
        return view('livewire.layanan.layanans-table',[
            'layanans' => layanans::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function layananEdit($layanan)
    {
        $this->layanan_id = $layanan['id'];
        $this->nama_layanan = $layanan['nama_layanan'];
    }

    public function layananUpdate()
    {
        $this->validate([
            'nama_layanan' => 'required',
        ]);

        $data = [
            'nama_layanan' => $this->nama_layanan,
        ];
        
        layanans::where('id', $this->layanan_id)->update($data);
        $this->layanan_id = NULL;
        $this->nama_layanan = NULL;
        $this->emit('layananStore');
    }

    public function layananDelete($id)
    {
        $this->layanan_id = $id;
        
        $layanan = layanans::find($id);
        $this->dispatchBrowserEvent('layananDeleteConfirmation', ['layanan' => $layanan]);
    }

    public function layananDestroyer()
    {
        layanans::find($this->layanan_id)->delete();
    }
}