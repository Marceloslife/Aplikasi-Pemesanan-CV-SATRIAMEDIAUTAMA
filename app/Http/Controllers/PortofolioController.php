<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $portofolio = Portofolio::all();
        // return view('portofolio.PortofolioTable', compact('portofolio'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portofolio.create');
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
        $ext = $request->foto->getClientOriginalExtension(); 
        $file = "portofolio-".time().".".$ext;
        $request->foto->storeAs('/public/dokumen', $file);

        $simpan = new Portofolio();
        $simpan->judul = $data['judul'];
        $simpan->keterangan = $data['keterangan'];
        $simpan->foto = $file;
        $simpan->tanggaltempat = $data['tanggaltempat'];
        $simpan->link_acara = $data['link_acara'];

        

        $simpan->save();
        return redirect('tabelportofolio');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $portofolio = Portofolio::find($id);
        return view('portofolio.edit')->with('portofolio', $portofolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        // dd($data);
        
        $simpan = portofolio::find($id);
        $simpan->judul = $data['judul'];
        $simpan->keterangan = $data['keterangan'];
        $simpan->tanggaltempat = $data['tanggaltempat'];
        $simpan->link_acara = $data['link_acara'];
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
        return redirect('tabelportofolio');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        portofolio::find($id)->delete();
        return redirect()->back();
    }
}