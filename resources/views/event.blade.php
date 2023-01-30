@extends('layouts.master')
@section('content')
    @foreach ($portofolio as $item)
        <div>
            <div>

                <link rel="stylesheet" href="event.css">
            </div>
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
    <div class="pagination justify-content-end">
        {{ $portofolio->links() }}
    </div>
    &nbsp;
@endsection
