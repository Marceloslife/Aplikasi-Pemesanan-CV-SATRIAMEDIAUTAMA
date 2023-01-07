@extends('layout.master')
@section('title', 'Portofolio')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="mb-3">
        {{-- <button class="btn btn-primary">Tambah</button> --}}
        <a type="Button" class="btn btn-primary btn-sm" href="{{ url('/portofolio/create') }}">Tambah</a>

    </div>
    <div class="col-md">
        <table class="table" id="categoryTbl">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama Event</th>
                {{-- <th>Foto</th>
                <th>Keterangan</th> --}}
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($portofolio as $index => $item)
                    @include('portofolio.show')
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        {{-- <td><img width="100px" src="{{ asset('/storage/dokumen/' . $item->foto) }}" alt=""></td> --}}
                        {{-- <td>{{ $item->keterangan }}</td> --}}
                        <td>
                            <div class="d-flex inline-block">
                                <a type="button" class="btn btn-warning mx-1"
                                    href="{{ url('portofolio/' . $item->id . '/edit') }}">Edit</a>
                                <form action="{{ url('portofolio/' . $item->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger mx-1 "
                                        onclick="return confirm('Apakah anda yakin untuk menghapus Data ini?')">Delete</button>
                                </form>
                                <a type="button" class="btn btn-primary mx-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-{{ $item->id }}">
                                    Detail
                                </a>
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
