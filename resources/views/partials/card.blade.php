<div>
   <!-- resources/views/partials/card.blade.php -->

<div class="row">
    @foreach($Hotnews as $card)
        <div class="col-md-6 mb-4">
            <div class="card text-bg-dark">
                <img src="{{ asset('img/' . $card->FotoContent) }}" alt="Card Image" class="m-5 p-5 img-fluid">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ $card->title }}</h5>
                    <p class="card-text">{{ $card->deskripsi }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>


<!-- Wide Cards -->
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Judul Wide Card 1</h5>
        <p class="card-text">Deskripsi wide card 1.</p>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Judul Wide Card 2</h5>
        <p class="card-text">Deskripsi wide card 2.</p>
    </div>
</div>

</div>
