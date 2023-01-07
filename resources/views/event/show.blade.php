<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <label>Nama event</label>
                    </div>
                    <div class="col-8">
                        {{ $item->nama_event }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>Poster Event</label>
                    </div>
                    <div class="col-8">
                        <img width="100px" src="{{ asset('/storage/dokumen/' . $item->poster_event) }}" alt="">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3">
                        <label>Teaser Event</label>
                    </div>

                    <div class="col-8">
                        <video width="100px" controls>
                            <source type="video/mp4" src="{{ asset('/storage/dokumen/' . $item->link_teaser_event) }}">
                        </video>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label>deskripsi event</label>
                    </div>
                    <div class="col-8">
                        {{ $item->deskripsi_event }}
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
                    <a type="button" class="btn btn-warning" href="{{ url('event/' . $item->id . '/edit') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
