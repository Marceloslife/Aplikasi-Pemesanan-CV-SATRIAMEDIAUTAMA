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
                        <h3 class="card-title">Detail Order</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body" style="overflow-y: hidden">
                        <table class="table nowrap table-responsive" style="width:100%">
                            <tbody>
                                <tr>
                                    {{-- @php
                                        dd($orders);
                                    @endphp --}}
                                    <td> Nama Event</td>
                                    <td>: {{ $orders->nama_event }}</td>
                                </tr>
                                <tr>
                                    <td>Penyelenggara</td>
                                    <td>: {{ $orders->penyelenggara }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Dari</td>
                                    <td>: {{ $orders->tgl_dari }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Sampai</td>
                                    <td>: {{ $orders->tgl_sampai }}</td>
                                </tr>
                                <tr>
                                    <td>Lokasi Event</td>
                                    <td>: {{ $orders->lokasi_event }}</td>
                                </tr>
                                <tr>
                                    <td>No Hp Penyelenggara</td>
                                    <td>: {{ $orders->no_hp_penyelenggara }}</td>
                                </tr>
                                <tr>
                                    <td>Email Penyelenggara</td>
                                    <td>: {{ $orders->email_penyelenggara }}</td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td>
                                        {{-- @php
                                            dd($layanans);
                                        @endphp --}}
                                        @foreach ($layanans as $layanan)
                                            @foreach ($layanan->layanans as $item)
                                                <li> {{ $item->nama_layanan }} </li>
                                            @endforeach
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    @can('adminview', $orders)
                                        <td>Status</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ url('approved/' . $orders->id) }}">Diterima</a>
                                            <a class="btn btn-sm btn-danger"
                                                href="{{ url('canceled/' . $orders->id) }}">Ditolak</a>
                                        </td>
                                    @endcan
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>: {{ $orders->deskripsi }}</td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->


                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection
