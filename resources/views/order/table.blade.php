@extends('layout.master')
@section('title', 'Order')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script> --}}

    <div class="mb-3">
        <a type="button" class="btn btn-primary btn-sm" href="{{ url('/order/create') }}">Tambah</a>
    </div>

    <div class="col-md">
        <table class="table" id="categoryTbl">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama Event</th>
                {{-- <th>Layanan</th> --}}
                {{-- <th>Penyelenggara</th>
                <th>Tanggal Waktu Event dari</th>
                <th>Tanggal Waktu Event sampai</th>
                <th>Lokasi Event</th>
                <th>No HP Penyelenggara</th>
                <th>Email Penyelenggara</th>
                <th>Layanan</th> --}}
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_event }}</td>
                        {{-- <td>{{ $item->penyelenggara }}</td>
                        <td>{{ $item->tgl_dari }}</td>
                        <td>{{ $item->tgl_sampai }}</td>
                        <td>{{ $item->lokasi_event }}</td>
                        <td>{{ $item->no_hp_penyelenggara }}</td>
                        <td>{{ $item->email_penyelenggara }}</td> --}}
                        {{-- <td>
                            <ul>
                                @foreach ($orders as $order)
                                    @foreach ($order->layanans as $layanan)
                                        @if ($layanan->pivot->orders_id === $item->id)
                                            <li> {{ $layanan->nama_layanan }} </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </td> --}}
                        <td><span class="badge bg-dark">{{ $item->status }}</span></td>

                        <td>
                            <div class="d-flex inline-block">

                                {{-- <a href="" class="btn btn-warning mx-1">Status</a> --}}
                                <a type="button" class="btn btn-warning mx-1"
                                    href="{{ url('order/' . $item->id) }}">Detail</a>
                                {{-- <form action="{{ url('order/' . $item->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger mx-1 "
                                        onclick="return confirm('Apakah anda yakin untuk menghapus Data ini?')">Delete</button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

@push('scripts1')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#categoryTbl').DataTable();
        });
    </script>
@endpush
