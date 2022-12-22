@extends('layout.master')
@section('title', 'Order')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script> --}}

    {{-- <div class="mb-3">
        <a type="button" class="btn btn-primary btn-sm" href="{{ url('/createevent') }}">Tambah</a>
    </div> --}}

    <div class="col-md">
        <table class="table" id="categoryTbl">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama Event</th>
                <th>Penyelenggara</th>
                <th>Tanggal Waktu Event</th>
                <th>Lokasi Event</th>
                <th>No HP Penyelenggara</th>
                <th>Email Penyelenggara</th>
                <th>Layanan</th>
                <th>Action</th>
                <th>Status</th>
            </thead>
            <tbody>
                {{-- @foreach ($event as $index => $item) --}}
                @include('order.show')
                <tr>
                    <td>1</td>
                    <td>Nama Event</td>
                    <td>MDP</td>
                    <td>2022-10-12</td>
                    <td>Aula</td>
                    <td>08212121</td>
                    <td>email@gmail.com</td>
                    <td>MC</td>
                    <td><span class="badge bg-primary">Permintaan Dikirim</span></td>
                    <td>
                        <a type="button" class="btn badge bg-warning" href="">Edit</a>
                        <form>
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn badge bg-danger">Delete</button>
                        </form>
                        <a type="button" class="btn badge bg-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-">
                            Detail
                        </a>
                    </td>
                </tr>
                {{-- @endforeach --}}
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
