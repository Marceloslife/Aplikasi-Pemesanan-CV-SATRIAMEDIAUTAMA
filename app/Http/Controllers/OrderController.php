<?php

namespace App\Http\Controllers;

use App\Mail\AcceptMail;
use App\Mail\DemoMail;
use App\Mail\CancelMail;
use App\Mail\NewOrderMail;
use App\Models\Layanans;
use App\Models\Orders;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

class OrderController extends Controller
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
        // $this->authorize('viewAny', Orders::class);
        
        $orders = Orders::with('layanans')->where('user_id', Auth::user()->id)->get();
        // dd($orders);
        return view('order.table', compact('orders'));
    }

    public function adminview(){
        $this->authorize('adminview', Orders::class);
        $orders = Orders::with('layanans')->get();
        return view('order.table', compact('orders'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('create', Orders::class);
        $layanans = Layanans::all();
        return view('order.create',['data' => $layanans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Orders $orders)
    {
        //
        // $this->authorize('create', Orders::class);
        $data = $request->all();
        // // dd($data);
         
        // $simpan = new Orders();
        // // if(!empty($simpan->input('layanan'))){
        // //     $orders = join('',$simpan->input('layanan'));
        // //     \DB::table('orders')->insert(['layanan' => $orders]);
        // // }else{
        // //     $orders = '';
        // // }
        // $simpan->nama_event = $data['nama_event'];
        // $simpan->penyelenggara = $data['penyelenggara'];
        // $simpan->tgl_dari = $data['tgl_dari'];
        // $simpan->tgl_sampai = $data['tgl_sampai'];
        // $simpan->lokasi_event = $data['lokasi_event'];
        // $simpan->no_hp_penyelenggara = $data['no_hp_penyelenggara'];
        // $simpan->email_penyelenggara = $data['email_penyelenggara'];
        // $simpan->status = "Permintaan Baru";
        // // $simpan->layanan = $data['layanan'];
       
        // $simpan->layanan_id = $data['layanan_id'];
        
       
        // return back();
            // $arrtostr = implode("", $request->layanan);
         $orders = Orders::create([
            'nama_event' => $request->nama_event,
            'penyelenggara' => $request->penyelenggara,
            'tgl_dari' => $request->tgl_dari,
            'tgl_sampai' => $request->tgl_sampai,
            'lokasi_event' => $request->lokasi_event,
            'no_hp_penyelenggara' => $request->no_hp_penyelenggara,
            'email_penyelenggara' => $request->email_penyelenggara,
            'user_id' => $request->user_id,
            'deskripsi' => $request->deskripsi
            // 'status' => "pe rmintaan Baru",

            // 'layanan_id' => $arrtostr
        ]);
        $email = 'm.irfan0205@gmail.com';
        // $email = 'darkviolet2525@gmail.com';
        $orders->layanans()->attach($request->layanan);
         $orders->save();
         Mail::to($email)->send(new NewOrderMail($email));
        // return redirect()->route('order');
        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $order)
    {
        //
        // $layanans = Layanans::where('id', $order->id)->get();
        $layanans = Orders::with('layanans')->where('id', $order->id)->get();
        // dd($layanans);
        return view('order.show')->with('orders', $order)->with('layanans', $layanans);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $order)
    {
        //
        $this->authorize('statusorder', Orders::class);
        $layanans = Layanans::where('id', $order->id)->get();
        return view('order.show')->with('orders', $order)->with('layanans', $layanans);
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
        $this->authorize('update', Orders::class);
        $data = $request->all();
        // dd($data);
        $simpan = Orders::find($id);
        // $simpan->nama_event = $data['nama_event'];
        // $simpan->penyelenggara = $data['penyelenggara'];
        // $simpan->tgl_dari = $data['tgl_dari'];
        // $simpan->tgl_sampai = $data['tgl_sampai'];
        // $simpan->lokasi_event = $data['lokasi_event'];
        // $simpan->no_hp_penyelenggara = $data['no_hp_penyelenggara'];
        // $simpan->email_penyelenggara = $data['email_penyelenggara'];
        $simpan->status = $data['status'];
        
         $simpan->save();
        return redirect('order');
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
        Orders::find($id)->delete();
        return redirect()->back();

    }
     public function approved($id){
        $data = Orders::find($id);
        // $emailAccept = Orders::find($id);
        $data->status = "Disetujui";

        $data->save();
        Mail::to($data['email_penyelenggara'])->send(new AcceptMail($data['email_penyelenggara']));

        return redirect()->route('adminvieworder')->with('success', 'Order disetujui');
    }

    public function canceled($id){
        $data = Orders::find($id);
        // $emailCancel = Orders::find($id);
        $data->status = "Ditolak";
        // dd($emailCancel['email_penyelenggara']);
        
        $data->save();
        Mail::to($data['email_penyelenggara'])->send(new CancelMail($data['email_penyelenggara']));

        return redirect()->route('adminvieworder')->with('error', 'Order ditolak');
    }

    // public function download(Request $request, $file){
    //     return response()->download(public_path('storage/files/'. $file));
    // }
}