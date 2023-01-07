@extends('layout.master')

@section('title', 'Data Anggota')

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
                    <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama"
                                    name="nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Masukkan email" name="email_address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNO.HP1">No.Hp</label>
                                <input type="number" class="form-control" id="exampleInputNo.Hp1"
                                    placeholder="Masukkan No.Hp" name="no_hp">
                            </div>
                            <!-- Date -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" class="form-control" data-inputmask-inputformat="mm/dd/yyyy"
                                            data-mask name="tanggal_lahir" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="address"
                                    placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <br>
                                <input type="file" name="foto" required>
                            </div>
                            <div class="form-group">
                                <label for="link_instagram">Link Instagram</label>
                                <input type="text" class="form-control" id="link_instagram"
                                    placeholder="Masukkan link instagram" name="link_instagram">
                            </div>
                            <div class="form-group">
                                <label>divisi</label>
                                <select class="form-control" name="divisi_id">
                                    {{-- <option value="">Pilih divisi</option> --}}
                                    @foreach ($divises as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>jabatan</label>
                                <select class="form-control" name="jabatan_id">
                                    {{-- <option value="">Pilih jabatan</option> --}}
                                    @foreach ($jabatans as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNIK">NIK</label>
                                <input type="number" class="form-control" name="nik" id="exampleInputNIK1"
                                    placeholder="Masukkan NIK">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputnoKaryawan">No Karyawan</label>
                                <input type="number" class="form-control" name="no_karyawan" id="exampleInputnoKaryawan"
                                    placeholder="Masukkan noKaryawan">
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Bergabung :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" class="form-control" data-inputmask-inputformat="mm/dd/yyyy"
                                            data-mask name="tanggal_bergabung">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
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
