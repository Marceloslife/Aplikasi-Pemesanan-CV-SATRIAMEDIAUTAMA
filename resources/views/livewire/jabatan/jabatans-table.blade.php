<div>
    @include('livewire.jabatan.jabatans-edit')
    <table class="table text-center ">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatans as $index => $item)
                <tr>
                    <td>{{ $jabatans->firstItem() + $index }}</td>
                    <td>{{ $item->nama_jabatan }}</td>
                    <td>
                        <button class="btn badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            wire:click="jabatanEdit({{ $item }})">Update</button>
                        <button class="btn badge bg-danger"
                            wire:click="jabatanDelete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $jabatans->links() }}
</div>
