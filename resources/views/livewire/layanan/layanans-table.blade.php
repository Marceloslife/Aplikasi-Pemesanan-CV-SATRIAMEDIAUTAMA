<div>
    @include('livewire.layanan.layanans-edit')
    <table class="table text-center ">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama layanan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($layanans as $index => $item)
                <tr>
                    <td>{{ $layanans->firstItem() + $index }}</td>
                    <td>{{ $item->nama_layanan }}</td>
                    <td>
                        <button class="btn badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            wire:click="layananEdit({{ $item }})">Update</button>
                        <button class="btn badge bg-danger"
                            wire:click="layananDelete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $layanans->links() }}
</div>
