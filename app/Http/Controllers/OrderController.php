<?php

namespace App\Http\Controllers;

use App\Models\Layanans;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
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
        $layanans = Layanans::all();
        return view('order.create',['data' => $layanans]);
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
        $simpan = new Orders();
        $simpan->nama_event = $data['nama_event'];
        $simpan->penyelenggara = $data['penyelenggara'];
        $simpan->tgl_dari = $data['tgl_dari'];
        $simpan->tgl_sampai = $data['tgl_sampai'];
        $simpan->lokasi_event = $data['lokasi_event'];
        $simpan->no_hp_penyelenggara = $data['no_hp_penyelenggara'];
        $simpan->email_penyelenggara = $data['email_penyelenggara'];
        $simpan->status = "Permintaan Baru";
        $simpan->layanan_id = $data['layanan_id'];
        
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
    }
}