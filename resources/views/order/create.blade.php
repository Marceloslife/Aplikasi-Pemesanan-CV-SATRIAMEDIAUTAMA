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
                                <label for="nama_event">nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event"
                                    placeholder="Masukkan nama Event" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara">penyelenggara</label>
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
                                                data-inputmask-inputformat="mm/dd/yyyy" data-mask name="tgl_dari">
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
                                                data-inputmask-inputformat="mm/dd/yyyy" data-mask name="tgl_sampai">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lokasi_event">lokasi Event</label>
                                <input type="text" class="form-control" id="lokasi_event" name="lokasi_event"
                                    placeholder="Masukkan lokasi Event" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp_penyelenggara">No HP Penyelenggara</label>
                                <input type="text" class="form-control" id="no_hp_penyelenggara"
                                    name="no_hp_penyelenggara" placeholder="Masukkan No HP Penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Penyelenggara</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    name="email_penyelenggara" placeholder="Enter email">
                            </div>
                            <div class="row">
                                <label>Layanan</label>
                                @foreach ($data as $item)
                                    <div class="col-sm-2">

                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" value="{{ $item->id }}"
                                                    name="layanan_id[]">
                                                <label for="checkboxPrimary1">{{ $item->nama_layanan }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
