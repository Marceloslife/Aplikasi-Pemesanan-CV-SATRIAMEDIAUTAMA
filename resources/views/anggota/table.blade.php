@extends('layout.master')
@section('title', 'Anggota')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script> --}}

    <div class="mb-3">
        <a type="button" class="btn btn-primary btn-sm" href="{{ url('/anggota/create') }}">Tambah</a>
    </div>

    <div class="col-md">
        <table class="table" id="categoryTbl">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama</th>
                {{-- <th>Poster Event</th>
                <th>Teaser Event</th>
                <th>Deskripsi Event</th> --}}
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($anggota as $index => $item)
                    @include('anggota.show')
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        {{-- <td><img width="100px" src="{{ asset('/storage/dokumen/' . $item->poster_event) }}" alt="">
                        </td>
                        <td><video width="100px" controls>
                                <source type="video/mp4" src="{{ asset('/storage/dokumen/' . $item->link_teaser_event) }}">
                            </video>
                        </td>
                        <td>{{ $item->deskripsi_event }}</td> --}}
                        <td>
                            <a type="button" class="btn badge bg-warning"
                                href="{{ url('anggota/' . $item->id . '/edit') }}">Edit</a>
                            <form action="{{ url('anggota/' . $item->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn badge bg-danger">Delete</button>
                            </form>
                            <a type="button" class="btn badge bg-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-{{ $item->id }}">
                                Detail
                            </a>
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
