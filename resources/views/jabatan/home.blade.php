@extends('layout.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('jabatanDeleteConfirmation', event => {
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Kamu Akan Menghapus " + event.detail.jabatan.nama_jabatan + "!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('jabatanDestroy')
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
        Livewire.on('jabatanStore', () => {
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
                    @livewire('jabatan.jabatans-form')
                </div>
                <div class="card">
                    <div class="card-header">jabatan</div>
                    <div class="card-body">
                        @livewire('jabatan.jabatans-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
