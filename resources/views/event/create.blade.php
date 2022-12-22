@extends('layout.master')

@section('title', 'event')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Event</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_event">nama event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event"
                                    placeholder="Masukkan Nama Event" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">deskripsi event</label>
                                <input type="text" class="form-control" name="deskripsi_event"
                                    placeholder="Masukkan Deskripsi Event" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggaltempat">tanggal tempat Potrofolio</label>
                                <input type="text" class="form-control" name="tanggaltempat"
                                    placeholder="Masukkan tanggal tempat" required>
                            </div>
                            <div class="form-group">
                                <label for="link_acara">link acara Potrofolio</label>
                                <input type="text" class="form-control" name="link_acara"
                                    placeholder="Masukkan link acara" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <br>
                                <input type="file" name="poster_event" required>
                            </div>

                            <div class="form-group">
                                <label for="Video">Upload Teaser</label>
                                <br>
                                <input type="file" name="link_teaser_event" required>
                            </div>

                        </div>
                        <!-- /.card-body -->

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
