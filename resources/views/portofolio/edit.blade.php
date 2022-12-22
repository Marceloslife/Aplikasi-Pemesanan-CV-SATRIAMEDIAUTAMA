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
                        <h3 class="card-title">Tambah Anggota</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('portofolio/' . $portofolio->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        {{-- @foreach ($portofolio as $item) --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" value="{{ "$portofolio->judul" }}"
                                    name="judul" placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan Potrofolio</label>
                                <input type="text" class="form-control" value="{{ "$portofolio->keterangan" }}"
                                    name="keterangan" placeholder="Masukkan keterangan">
                            </div>
                            <div class="form-group">
                                <label for="tanggaltempat">tanggal tempat Potrofolio</label>
                                <input type="text" class="form-control" value="{{ "$portofolio->tanggaltempat" }}"
                                    name="tanggaltempat" placeholder="Masukkan tanggal tempat">
                            </div>
                            <div class="form-group">
                                <label for="link_acara">link acara Potrofolio</label>
                                <input type="text" class="form-control" value="{{ "$portofolio->link_acara" }}"
                                    name="link_acara" placeholder="Masukkan link acara">
                            </div>

                            <div class="form-group">
                                <a href="{{ asset('storage/dokumen/' . $portofolio->foto) }}" target="_blank">Preview
                                    Foto</a>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto Baru</label>
                                <br>

                                <input type="hidden" name="old_file" value="{{ $portofolio->foto }}">
                                <input type="file" name="foto">
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
