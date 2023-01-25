<h1>Order Masuk</h1>
<p>Halo Admin orderan dengan nama {{ $order->nama_event }} telah masuk dengan keterangan :</p>
<p>Penyelenggara :{{ $order->penyelenggara }}</p>
<p>Tanggal Dari :{{ $order->tgl_dari }}</p>
<p>Tanggal Sampai :{{ $order->tgl_sampai }}</p>
<p>Lokasi Event :{{ $order->lokasi_event }}</p>
<p>NO HP Penyelenggara :{{ $order->no_hp_penyelenggara }}</p>
{{-- <a href="http://wa.me/{{ $order->no_hp_penyelenggara }}">Link WhatsApp Penyelenggara</a> --}}
<p>Email Penyelenggara :{{ $order->email_penyelenggara }}</p>
<p>Deskripsi :{{ $order->deskripsi }}</p>
{{-- <p>{{ $order }}</p> --}}
