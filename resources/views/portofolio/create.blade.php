@extends('layout.master')

@section('title', 'Portofolio')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Portofolio</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Masukkan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan Potrofolio</label>
                                <input type="text" class="form-control" name="keterangan"
                                    placeholder="Masukkan keterangan" required>
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
                                <input type="file" name="foto" required>
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
