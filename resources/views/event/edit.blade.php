@extends('layout.master')

@section('title', 'Event')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Event</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('event/' . $event->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        {{-- @foreach ($event as $item) --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_event">nama event</label>
                                <input type="text" class="form-control" id="nama_event"
                                    value="{{ "$event->nama_event" }}" name="nama_event" placeholder="Masukkan nama_event">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan Event</label>
                                <input type="text" class="form-control" value="{{ "$event->deskripsi_event" }}"
                                    name="deskripsi_event" placeholder="Masukkan keterangan">
                            </div>
                            <div class="form-group">
                                <label for="tanggaltempat">tanggal tempat Potrofolio</label>
                                <input type="text" class="form-control" value="{{ "$event->tanggaltempat" }}"
                                    name="tanggaltempat" placeholder="Masukkan tanggal tempat">
                            </div>
                            <div class="form-group">
                                <label for="link_acara">link acara Potrofolio</label>
                                <input type="text" class="form-control" value="{{ "$event->link_acara" }}"
                                    name="link_acara" placeholder="Masukkan link acara">
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('storage/dokumen/' . $event->poster_event) }}" target="_blank">Preview
                                    Foto</a>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Poster Baru</label>
                                <br>

                                <input type="hidden" name="old_file" value="{{ $event->poster_event }}">
                                <input type="file" name="poster_event">
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('storage/dokumen/' . $event->link_teaser_event) }}"
                                    target="_blank">Preview
                                    Video</a>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Teaser Event</label>
                                <br>

                                <input type="hidden" name="old_file" value="{{ $event->link_teaser_event }}">
                                <input type="file" name="link_teaser_event">
                            </div>


                        </div>
                        <!-- /.card-body -->
                        {{-- @endforeach --}}

                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection
