<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <label>Nama</label>
                    </div>
                    <div class="col-8">
                        {{ $item->nama }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>Email Address</label>
                    </div>
                    <div class="col-8">
                        {{ $item->email_address }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>No HP</label>
                    </div>
                    <div class="col-8">
                        {{ $item->no_hp }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>jenis_kelamin</label>
                    </div>
                    <div class="col-8">
                        {{ $item->jenis_kelamin }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>tanggal_lahir</label>
                    </div>
                    <div class="col-8">
                        {{ $item->tanggal_lahir }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>status</label>
                    </div>
                    <div class="col-8">
                        {{ $item->status }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>alamat</label>
                    </div>
                    <div class="col-8">
                        {{ $item->alamat }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>divises_id</label>
                    </div>
                    <div class="col-8">
                        {{ $item->divises->nama_divisi }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>jabatans_id</label>
                    </div>
                    <div class="col-8">
                        {{ $item->jabatans->nama_jabatan }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>nik</label>
                    </div>
                    <div class="col-8">
                        {{ $item->nik }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>no_karyawan</label>
                    </div>
                    <div class="col-8">
                        {{ $item->no_karyawan }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>tanggal bergabung</label>
                    </div>
                    <div class="col-8">
                        {{ $item->tanggal_bergabung }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>link_instagram</label>
                    </div>
                    <div class="col-8">
                        <a href="{{ $item->link_instagram }}" target="_blank">{{ $item->link_instagram }}</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-warning"
                        href="{{ url('anggota/' . $item->id . '/edit') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
