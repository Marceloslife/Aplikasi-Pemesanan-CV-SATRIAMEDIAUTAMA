<div>
    @include('livewire.divises.divisi-edit')
    <table class="table text-center ">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama_divisi</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($divisis as $index => $item)
                <tr>
                    <td>{{ $divisis->firstItem() + $index }}</td>
                    <td>{{ $item->nama_divisi }}</td>
                    <td>
                        <button class="btn badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            wire:click="divisiEdit({{ $item }})">Update</button>
                        <button class="btn badge bg-danger" wire:click="divisiDelete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $divisis->links() }}
</div>
