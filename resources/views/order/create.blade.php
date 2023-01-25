@extends('layout.master')

@section('title', 'Order')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah order</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_event">Nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event"
                                    placeholder="Masukkan nama Event" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara">Penyelenggara</label>
                                <input type="text" class="form-control" name="penyelenggara"
                                    placeholder="Masukkan Penyelenggara" required>
                            </div>
                            <div class="row">
                                <label>Tanggal Event:</label>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Dari</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                data-inputmask-inputformat="mm/dd/yyyy" data-mask name="tgl_dari" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Sampai</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control"
                                                data-inputmask-inputformat="mm/dd/yyyy" data-mask name="tgl_sampai"
                                                required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lokasi_event">Lokasi Event</label>
                                <input type="text" class="form-control" id="lokasi_event" name="lokasi_event"
                                    placeholder="Masukkan lokasi Event" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp_penyelenggara">No HP Penyelenggara</label>
                                <input type="number" class="form-control" id="no_hp_penyelenggara"
                                    name="no_hp_penyelenggara" placeholder="Masukkan No HP Penyelenggara" required>
                                {{-- <input type="tel" id="phone" name="no_hp_penyelenggara"
                                    placeholder="+62 895-6204-89921" pattern="[+0-9]{3} [0-9]{3}-[0-9]{4}-[0-9]{5}"
                                    required> --}}
                            </div>
                            <div class="form-group">
                                <label for="email">Email Penyelenggara</label>
                                <input type="email" class="form-control" id="email" name="email_penyelenggara"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="row">
                                <label for="name" class="form-label">Layanan</label>
                                <select id="layanan" name="layanan[]" multiple required>
                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_layanan }} </option>
                                    @endforeach
                                </select>
                                {{-- 
                                <select id="layanan" name="layanan[]" onchange="toggle(this.value)">
                                    @foreach ($data as $item)
                                        <option value="{{ $item->nama_layanan }}">{{ $item->nama_layanan }}
                                        </option>
                                    @endforeach
                                </select> --}}
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi"
                                    required>
                                <input type="text" class="form-control" name="user_id"
                                    value="{{ Auth::user()->id }}"style="display: none">
                            </div>


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
