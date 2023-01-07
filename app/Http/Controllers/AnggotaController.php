<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Divisis;
use App\Models\Jabatans;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('adminview', Anggotas::class);
        $anggota = Anggotas::all();
        $data = compact('anggota');
        return view('anggota.table', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('adminview', Anggotas::class);
        $jabatans = Jabatans::all();
        $divises = Divisis::all();

        // return view('anggota.create',['data' => $jabatans]);
        // return view('anggota.create',['data' => $divises]);
        return view('anggota.create')->with('jabatans', $jabatans)->with('divises', $divises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->authorize('adminview', Anggotas::class);
        $data = $request->all();
        // dd($data);
        $ext = $request->foto->getClientOriginalExtension(); 
        $file = "anggota-".time().".".$ext;
        $request->foto->storeAs('/public/dokumen', $file);

        $simpan = new Anggotas();
        $simpan->nama = $data['nama'];
        $simpan->email_address = $data['email_address'];
        $simpan->no_hp = $data['no_hp'];
        $simpan->jenis_kelamin = $data['jenis_kelamin'];
        $simpan->tanggal_lahir = $data['tanggal_lahir'];
        $simpan->status = "aktif";
        $simpan->alamat = $data['alamat'];
        $simpan->divises_id = $data['divisi_id'];
        $simpan->jabatans_id = $data['jabatan_id'];
        $simpan->nik = $data['nik'];
        $simpan->no_karyawan = $data['no_karyawan'];
        $simpan->tanggal_bergabung = $data['tanggal_bergabung'];
        $simpan->link_instagram = $data['link_instagram'];
        $simpan->foto = $file;

        $simpan->save();
        return redirect('anggota');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $this->authorize('adminview', Anggotas::class);
        $jabatans = Jabatans::all();
        $divises = Divisis::all();

         $anggota = Anggotas::find($id);
        return view('anggota.edit')->with('anggota', $anggota)->with('jabatans', $jabatans)->with('divises', $divises);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $this->authorize('adminview', Anggotas::class);
        $data = $request->all();

        $simpan = Anggotas::find($id);
        $simpan->nama = $data['nama'];
        $simpan->email_address = $data['email_address'];
        $simpan->no_hp = $data['no_hp'];
        $simpan->jenis_kelamin = $data['jenis_kelamin'];
        $simpan->tanggal_lahir = $data['tanggal_lahir'];
        $simpan->status = "aktif";
        $simpan->alamat = $data['alamat'];
        $simpan->divises_id = $data['divisi_id'];
        $simpan->jabatans_id = $data['jabatan_id'];
        $simpan->nik = $data['nik'];
        $simpan->no_karyawan = $data['no_karyawan'];
        $simpan->tanggal_bergabung = $data['tanggal_bergabung'];
        $simpan->link_instagram = $data['link_instagram'];
         $file_name = $simpan->foto;
        $file_path = public_path('storage/dokumen/' . $file_name);
         if ($request->hasFile('foto')){
            unlink($file_path);

            $f = $request->file('foto');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = "foto-".time(). "." . $file_ext;
            $file_path = public_path('storage/dokumen');
            $f->move($file_path, $file_name);
            $simpan->foto = $file_name;
        } else{
            $simpan->foto =$request->old_file;
        }

        $simpan->save();
        return redirect('anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $this->authorize('adminview', Anggotas::class);
        Anggotas::find($id)->delete();
        return redirect()->back();
    }
}