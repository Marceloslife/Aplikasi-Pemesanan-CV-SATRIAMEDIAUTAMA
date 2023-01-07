@extends('layouts.master')
@section('content')
    @foreach ($portofolio as $item)
        <div>
            <div>

            </div>
            <link rel="stylesheet" href="event.css">
            &nbsp;

            <center>
                <h1 class="font-weight-light">Event</h1>
            </center>
            &nbsp;
            <center>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('/storage/dokumen/' . $item->foto) }}" alt="" class="img-fluid" width="1000dp">
                </div>
            </center>
            &nbsp;
            <center>
                <h3>{{ $item->judul }}</h3>
                <p>
                    {{ $item->tanggaltempat }}
                </p>
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                    DETAIL
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">EVENT
                                </h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">{{ $item->judul }}


                                <p>{{ $item->tanggaltempat }}</p>
                                <p>Link Acara :</p> <a href="{{ $item->link_acara }}">Click
                                    Here</a>
                            </div>


            </center>
        </div>
        &nbsp;
    @endforeach

    {{-- <body>
        &nbsp;
        <center>
            <img src="images/perikanan.png" class="img-rounded" alt="Cinque Terre" width="404" height="=336">
            </div>
        </center>
        &nbsp;
        <center>
            &nbsp;
            <h3>Hari Peduli Perikanan Darat Dan Peresmian Gedung BRPPUPP-SEAFDEC 2020</h3>
            <p> Gedung BRPPUP - SEAFDEC JAKABARING, KOTA PALEMBANG
            </p>
            &nbsp;
            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                DETAIL
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EVENT
                            </h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">NAMA KEGIATAN : GEBYAR MILENIAL BUSINESS CREATIVE 2022


                            <p>Tanggal Kegiatan : 12-15 Mei 2022</p>
                            <p>Link Acara :</p> <a href="https://www.instagram.com/satriamediautama_eo/">Click
                                Here</a>
                        </div>


        </center>

        
    </body>

    <body>
        &nbsp;
        <center>
            <img src="images/Launching.png" class="img-rounded" alt="Cinque Terre" width="404" height="=336">
            </div>
        </center>
        &nbsp;
        <center>
            &nbsp;
            <h3>LAUNCHING RADIO SUMSEL 2020</h3>
            <p>PIM MALL - KOTA PALEMBANG, SUMATERA SELATAN 21 JUNI 2020
            </p>
            &nbsp;
            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                DETAIL
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EVENT
                            </h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">NAMA KEGIATAN : GEBYAR MILENIAL BUSINESS CREATIVE 2022


                            <p>Tanggal Kegiatan : 12-15 Mei 2022</p>
                            <p>Link Acara :</p> <a href="https://www.instagram.com/satriamediautama_eo/">Click
                                Here</a>
                        </div>


        </center>
    </body>

    <body>
        &nbsp;
        <center>
            <img src="images/Sumsel 17.png" class="img-rounded" alt="Cinque Terre" width="404" height="=336">
            </div>
        </center>
        &nbsp;
        <center>
            &nbsp;
            <h3>SUMSEL17AN FEST 2020 (VIRTUAL EVENT)</h3>
            <p>Final at the Gade Cafe - Kota Palembang, Sumatera Selatan 18 - 30 agustus 2020
            </p>
            &nbsp;
            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                DETAIL
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EVENT
                            </h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">NAMA KEGIATAN : GEBYAR MILENIAL BUSINESS CREATIVE 2022


                            <p>Tanggal Kegiatan : 12-15 Mei 2022</p>
                            <p>Link Acara :</p> <a href="https://www.instagram.com/satriamediautama_eo/">Click
                                Here</a>
                        </div>


        </center>
    </body> --}}
    &nbsp;
@endsection
