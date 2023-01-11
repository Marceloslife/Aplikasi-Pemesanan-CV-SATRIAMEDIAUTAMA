<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Event;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
     public function index(){
        $event = Event::orderBy('id', 'desc')->first();
        $portofolio = Portofolio::latest()->limit(1)->get();
        $anggota = Anggotas::latest()->limit(12)->get();
        return view('tampilan')->with('event', $event)->with('portofolio', $portofolio)->with('anggota', $anggota);
    }

    public function portofolio(){
        $portofolio = Portofolio::orderBy('id', 'desc')->paginate(7);
        return view('event')->with('portofolio', $portofolio);
    }

    public function anggota(){
        $anggota = Anggotas::orderBy('id', 'desc')->paginate(12);
        return view('crew2')->with('anggota', $anggota);
    }

    


}