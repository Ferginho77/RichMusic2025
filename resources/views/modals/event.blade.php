<div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EventModalLabel">Artikel Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Link</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $x)
                            <tr>
                                <td>{{ $x->title }}</td>
                                <td>{{ $x->deskripsi }}</td>
                                <td><a href="{{ $x->link }}" target="_blank">{{ $x->link }}</a></td>
                                <td><img src="{{ asset('img/' . $x->FotoContent) }}" alt="Foto Artikel" style="width: 100px; height: auto;"></td>
                             <td style="max-width: 60px;">
                                    <form action="{{ route('hapus.artikel', $x->id) }}" method="POST" onsubmit="return confirm('Apakah Yakin Untuk Menghapus Artikel Ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <div class="row">
                                            <div class="col-md-5">
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </div>
                                    </form>    
                                            <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </div>  