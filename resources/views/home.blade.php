@extends('layouts.app')

@section('title', 'Admin Home')

@section('content')

<main>
   <div class="container-fluid">
    <div class="row mt-5">
         <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="height: 18rem; background-color: #1c1c1c;">
                <div class="card-header text-center">Artikel Tersedia</div>
                <div class="card-body text-center" style="font-size: 6rem;"> {{ $totalArtikel }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <button class="btn btn-success"
                  data-bs-toggle="modal"
                  data-bs-target="#TambahModal"
                  style="width: 100%;"
                  >Tambah Artikel</button>
                    <div class="small text-white">
                        <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="height: 18rem;">
                <div class="card-header text-center">Artikel Event</div>
                <div class="card-body text-center" style="font-size: 6rem;"> {{ $totalEvent }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <button class="btn btn-success"
                     data-bs-toggle="modal"
                     data-bs-target="#EventModal"
                     style="width: 100%;"
                    >View Details</button>
                    <div class="small text-white">
                        <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="height: 18rem;">
                <div class="card-header text-center">Artikel HotNews</div>
                <div class="card-body text-center" style="font-size: 6rem;"> {{ $totalHotnews }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                   <button class="btn btn-success"
                     data-bs-toggle="modal"
                     data-bs-target="#HotnewsModal"
                     style="width: 100%;"
                    >View Details</button>
                    <div class="small text-white">
                        <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="height: 18rem;">
                <div class="card-header text-center">Artikel Eksklusif</div>
                <div class="card-body text-center" style="font-size: 6rem;"> {{ $totalEksklusif }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <button class="btn btn-success"
                     data-bs-toggle="modal"
                     data-bs-target="#EksklusifModal"
                     style="width: 100%;"
                    >View Details</button>
                    <div class="small text-white">
                        <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

   <div class="modal fade" id="TambahModal" tabindex="-1" aria-labelledby="TambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TambahModalLabel">Form Tambah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambah" method="POST" action="{{ route('tambah.artikel') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Deskripsi Artikel</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Link Artikel (OPSIONAL)</label>
                            <input type="text" class="form-control" id="link" name="link" >
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Foto Artikel</label>
                            <input type="file" class="form-control" id="FotoContent" name="FotoContent" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Tipe Artikel</label>
                           <section>
                            <select class="form-select" id="Tipe" name="Tipe" required>
                                <option value="" disabled selected>Pilih Tipe Artikel</option>
                                <option value="Event">Event</option>
                                <option value="Hotnews">Hot News</option>
                                <option value="Eksklusif">Eksklusif</option>
                            </select>
                           </section>
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
   </div>  
          {{-- MODAL EVENT --}}
          @include('modals.event')
          @include('modals.hotnews')
          @include('modals.eksklusif')
</main>
@endsection
