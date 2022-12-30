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
                    <form action="{{ url('order/' . $orders->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <table>
                                <tbody class="table nowrap table-responsive" style="width:100%">
                                    <tr>
                                        {{-- @php
                                        dd($orders);
                                    @endphp --}}
                                        <td> Nama Event</td>
                                        <td>{{ $orders->nama_event }}</td>
                                    </tr>
                                    <tr>
                                        <td>Penyelenggara</td>
                                        <td>{{ $orders->penyelenggara }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Dari</td>
                                        <td>{{ $orders->tgl_dari }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Sampai</td>
                                        <td>{{ $orders->tgl_sampai }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi Event</td>
                                        <td>{{ $orders->lokasi_event }}</td>
                                    </tr>
                                    <tr>
                                        <td>No Hp Penyelenggara</td>
                                        <td>{{ $orders->no_hp_penyelenggara }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email Penyelenggara</td>
                                        <td>{{ $orders->email_penyelenggara }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <select require name="status" class="form-control simpleselect" id="list"
                                                onchange="toggle(this.value)">
                                                @if ($orders->status == '1')
                                                    {
                                                    <option value="1" class="bold">Permintaan Dikirim</option>
                                                    }
                                                @elseif ($orders->status == '2')
                                                    {
                                                    <option value="2" class="bold text-danger">Diterima</option>
                                                    }
                                                @elseif ($orders->status == '3')
                                                    {
                                                    <option value="3" class="bold text-danger">Ditolak</option>
                                                    }
                                                @endif

                                                <option value="Permintaan Dikirim">Permintaan Dikirim</option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
