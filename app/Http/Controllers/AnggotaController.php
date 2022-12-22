<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Divisis;
use App\Models\Jabatans;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = $request->all();
        // dd($data);
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

        $simpan->save();
        return back();



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
         $anggota = Anggotas::find($id);
        return view('anggota.edit')->with('anggota', $anggota);
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
        $data = $request->all();

        $simpan = Anggotas::find($id);
        $simpan->nama_event = $data['nama_event'];
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

        $simpan->save();
        return redirect('tabelanggota');
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
        Anggotas::find($id)->delete();
        return redirect()->back();
    }
}