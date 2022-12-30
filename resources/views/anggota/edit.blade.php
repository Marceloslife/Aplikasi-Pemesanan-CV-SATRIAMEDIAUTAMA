@extends('layout.master')

@section('title', 'Edit Anggota')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit anggota</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('anggota/' . $anggota->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        {{-- @foreach ($anggota as $item) --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">nama anggota</label>
                                <input type="text" class="form-control" id="nama" value="{{ "$anggota->nama" }}"
                                    name="nama" placeholder="Masukkan nama_anggota">
                            </div>
                            <div class="form-group">
                                <label for="email_address">email_address anggota</label>
                                <input type="text" class="form-control" id="email_address"
                                    value="{{ "$anggota->email_address" }}" name="email_address"
                                    placeholder="Masukkan nama_anggota">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no_hp anggota</label>
                                <input type="text" class="form-control" id="no_hp" value="{{ "$anggota->no_hp" }}"
                                    name="no_hp" placeholder="Masukkan no hp anggota">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis_kelamin anggota</label>
                                <input type="text" class="form-control" id="jenis_kelamin"
                                    value="{{ "$anggota->jenis_kelamin" }}" name="jenis_kelamin"
                                    placeholder="Masukkan jenis_kelamin_anggota">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">tanggal_lahir anggota</label>
                                <input type="text" class="form-control" id="tanggal_lahir"
                                    value="{{ "$anggota->tanggal_lahir" }}" name="tanggal_lahir"
                                    placeholder="Masukkan tanggal_lahir_anggota">
                            </div>
                            <div class="form-group">
                                <label for="status">status anggota</label>
                                <input type="text" class="form-control" id="status" value="{{ "$anggota->status" }}"
                                    name="status" placeholder="Masukkan status_anggota">
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat anggota</label>
                                <input type="text" class="form-control" id="alamat" value="{{ "$anggota->alamat" }}"
                                    name="alamat" placeholder="Masukkan alamat_anggota">
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
                                <label for="nik">nik anggota</label>
                                <input type="text" class="form-control" id="nik" value="{{ "$anggota->nik" }}"
                                    name="nik" placeholder="Masukkan nik_anggota">
                            </div>
                            <div class="form-group">
                                <label for="no_karyawan">no_karyawan anggota</label>
                                <input type="text" class="form-control" id="no_karyawan"
                                    value="{{ "$anggota->no_karyawan" }}" name="no_karyawan"
                                    placeholder="Masukkan no_karyawan_anggota">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_bergabung">tanggal_bergabung anggota</label>
                                <input type="text" class="form-control" id="tanggal_bergabung"
                                    value="{{ "$anggota->tanggal_bergabung" }}" name="tanggal_bergabung"
                                    placeholder="Masukkan tanggal_bergabung_anggota">
                            </div>
                            <div class="form-group">
                                <label for="link_instagram">link instagram anggota</label>
                                <input type="text" class="form-control" id="link_instagram"
                                    value="{{ "$anggota->link_instagram" }}" name="link_instagram"
                                    placeholder="Masukkan link_instagram_anggota">
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
