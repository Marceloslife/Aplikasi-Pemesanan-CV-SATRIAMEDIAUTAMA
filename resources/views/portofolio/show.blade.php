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
                        <label>Judul Portofolio</label>
                    </div>
                    <div class="col-8">
                        {{ $item->judul }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>Foto Portofolio</label>
                    </div>
                    <div class="col-8">
                        <img width="100px" src="{{ asset('/storage/dokumen/' . $item->foto) }}" alt="">
                    </div>
                </div><br>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>keterangan Portofolio</label>
                    </div>
                    <div class="col-8">
                        {{ $item->keterangan }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>tanggal tempat Portofolio</label>
                    </div>
                    <div class="col-8">
                        {{ $item->tanggaltempat }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>link acara Portofolio</label>
                    </div>
                    <div class="col-8">
                        {{ $item->link_acara }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-warning"
                        href="{{ url('portofolio/' . $item->id . '/edit') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
