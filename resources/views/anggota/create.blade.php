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
                    <form action="{{ route('anggotas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name='nama' placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email_address" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNO.HP1">No.Hp</label>
                                <input type="number" class="form-control" name="no_hp" name="no_hp"
                                    placeholder="Enter No.Hp">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Jenis Kelamin</label>
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;" name="jenis_kelamin">
                                        <option>Pilih</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="divises_id">Nama Divisi</label>
                                    <select name="divisions_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option value="">Pilih Nama divisi</option>
                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                                        @endforeach
                                    </select>
                                    @error('divisions_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jabatans_id">Nama jabatan</label>
                                    <select name="jabatans_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option value="">Pilih jabatan</option>
                                        @foreach ($positions as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                        @endforeach
                                    </select>
                                    @error('positions_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Date -->
                                <div class="form-group">
                                    <label>Tanggal Lahir:</label>
                                    <div class="input-group date" id="tanggal_lahir" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="tanggal_lahir"
                                            data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control select2 select2-danger"
                                            data-dropdown-css-class="select2-danger" style="width: 100%;" name="status">
                                            <option>Pilih</option>
                                            <option value="L">Aktif</option>
                                            <option value="P">Tidak Aktif</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="address"
                                            placeholder="Masukkan Alamat" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK"
                                            name="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_karyawan">No Karyawan</label>
                                        <input type="text" class="form-control" id="no_karyawan"
                                            placeholder="Masukkan No Karyawan" name="no_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Bergabung:</label>
                                        <div class="input-group date" id="tanggal_bergabung" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                name="tanggal_bergabung" data-target="#reservationdate" />
                                            <div class="input-group-append" data-target="#reservationdate"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            @endsection
