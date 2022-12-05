<div>
    @include('livewire.anggotas.anggota-edit')
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>email address</th>
                <th>No Hp</th>
                <th>jenis kelamin</th>
                <th>tanggal lahir</th>
                <th>status</th>
                <th>alamat</th>
                <th>divisi</th>
                <th>jabatan</th>
                <th>nik</th>
                <th>no karyawan</th>
                <th>tanggal bergabung</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $index => $item)
                <tr>
                    <td>{{ $anggotas->firstItem() + $index }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email_address }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->divises_id }}</td>
                    <td>{{ $item->jabatans_id }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->no_karyawan }}</td>
                    <td>{{ $item->tanggal_bergabung }}</td>
                    <td>
                        <button class="btn badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            wire:click="anggotaEdit({{ $item }})">Update</button>
                        <button class="btn badge bg-danger"
                            wire:click="anggotaDelete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $anggotas->links() }}
</div>
