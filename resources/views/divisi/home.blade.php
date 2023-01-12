@extends('layout.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('divisiDeleteConfirmation', event => {
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Kamu Akan Menghapus " + event.detail.divisi.nama_divisi + "!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('divisiDestroy')
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
    </script>
    <script>
        Livewire.on('divisiStore', () => {
            $('#exampleModal').modal('hide');
            $('#editModal').modal('hide');
        })
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="mb-1">
                    @livewire('divises.divisi-form')
                </div>
                <div class="card">
                    <div class="card-header">Divisi</div>
                    <div class="card-body">
                        @livewire('divises.divisi-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
