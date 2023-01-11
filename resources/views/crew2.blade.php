@extends('layouts.master')
@section('content')
    &nbsp;
    <link rel="stylesheet" href="crew.css">
    <div class="container text-center mt-5 mb-2">

        <h1 class="mb-0">TEAM SATRIA MEDIA UTAMA</h1><span>anggota team tahun 2022-2023</span>
    </div>
    <div class="container fluid ">
        <div class="row">
            @foreach ($anggota as $item)
                <div class="col-md-4 mb-1">
                    <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle"
                            src="{{ asset('/storage/dokumen/' . $item->foto) }}" width="90">
                        <h5 class="mt-3 name">{{ $item->nama }}</h5><span class="work d-block">Divisi
                            : {{ $item->divises->nama_divisi }}</span><span class="work d-block">Jabatan
                            :
                            {{ $item->jabatans->nama_jabatan }}</span><span class="work d-block">ID NO
                            :
                            {{ $item->no_karyawan }}</span>

                        <div class="mt-4 about"><span>&nbsp; </span></div>
                        <div class="mt-4">
                            <a href="{{ $item->link_instagram }}" class="btn btn-info" role="button">Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    &nbsp;
@endsection
