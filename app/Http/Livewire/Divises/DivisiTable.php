<?php

namespace App\Http\Livewire\Divises;

use App\Models\Divisis;
use Livewire\Component;
use Livewire\WithPagination;

class DivisiTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $divisi_id;
    public $nama_divisi;

    protected $listeners = ['divisiStore'=>'render', 'divisiDestroy'=>'divisiDestroyer'];


    public function render()
    {
        return view('livewire.divises.divisi-table',[
            'divisis' => Divisis::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function divisiEdit($divisi)
    {
        $this->divisi_id = $divisi['id'];
        $this->nama_divisi = $divisi['nama_divisi'];
    }

    public function divisiUpdate()
    {
        $this->validate([
            'nama_divisi' => 'required',
        ]);

        $data = [
            'nama_divisi' => $this->nama_divisi,
        ];
        
        Divisis::where('id', $this->divisi_id)->update($data);
        $this->divisi_id = NULL;
        $this->nama_divisi = NULL;
        $this->emit('divisiStore');
    }

    public function divisiDelete($id)
    {
        $this->divisi_id = $id;
        
        $divisi = Divisis::find($id);
        $this->dispatchBrowserEvent('divisiDeleteConfirmation', ['divisi' => $divisi]);
    }

    public function divisiDestroyer()
    {
        Divisis::find($this->divisi_id)->delete();
    }
}