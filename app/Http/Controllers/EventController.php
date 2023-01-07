<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventController extends Controller
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
        $this->authorize('adminview', Event::class);
        $event = Event::all();
        return view('event.table', compact('event'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('adminview', Event::class);
        return view('event.create');
        
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
        $this->authorize('adminview', Event::class);
        $data = $request->all();

        // dd($data);

        $ext = $request->poster_event->getClientOriginalExtension();
        $file_poster = "event-" . time(). "." . $ext;
        $request->poster_event->storeAs('/public/dokumen', $file_poster);

        $ext = $request->link_teaser_event->getClientOriginalExtension();
        $file_teaser = "eventTeaser-" . time(). "." . $ext;
        $request->link_teaser_event->storeAs('/public/dokumen', $file_teaser);

        $simpan = new Event();
        $simpan->nama_event = $data['nama_event'];
        $simpan->poster_event = $file_poster;
        $simpan->link_teaser_event = $file_teaser;
        $simpan->deskripsi_event = $data['deskripsi_event'];
        $simpan->tanggaltempat = $data['tanggaltempat'];
        $simpan->link_acara = $data['link_acara'];
        
         $simpan->save();
        return redirect('tabelevent');
         
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
        $this->authorize('adminview', Event::class);
        $event = Event::find($id);
        return view('event.edit')->with('event', $event);
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
        $this->authorize('adminview', Event::class);
        $data = $request->all();

        $simpan = Event::find($id);
        $simpan->nama_event = $data['nama_event'];
        $simpan->deskripsi_event = $data['deskripsi_event'];
        $simpan->tanggaltempat = $data['tanggaltempat'];
        $simpan->link_acara = $data['link_acara'];
        $file_name = $simpan->poster_event;
        $file_path = public_path('storage/dokumen/' . $file_name);
        if ($request->hasfile('poster_event')){
            
            unlink($file_path);

            $f = $request->file('poster_event');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = "poster_event-".time(). "." . $file_ext;
            $file_path = public_path('storage/dokumen');
            $f->move($file_path, $file_name);
            $simpan->poster_event = $file_name;
        } else{
            $simpan->poster_event =$request->old_file;
        }

        $file_name = $simpan->link_teaser_event;
        $file_path = public_path('storage/dokumen/' . $file_name);
        if ($request->hasfile('link_teaser_event')){
            
            unlink($file_path);

            $f = $request->file('link_teaser_event');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = "link_teaser_event-".time(). "." . $file_ext;
            $file_path = public_path('storage/dokumen');
            $f->move($file_path, $file_name);
            $simpan->link_teaser_event = $file_name;
        } else{
            $simpan->link_teaser_event =$request->old_file;
        }
        

        $simpan->save();
        return redirect('tabelevent');




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
        $this->authorize('adminview', Event::class);
        Event::find($id)->delete();
        return redirect()->back();
    }
}