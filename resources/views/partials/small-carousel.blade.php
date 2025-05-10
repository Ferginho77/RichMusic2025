<div>
   <!-- resources/views/partials/small-carousel.blade.php -->

<div class="card bg-transparent custom-card" style="margin: 0 0 17em 0;">
    <div class="card-header bg-danger">
        <b class="ms-3">EXCLUSIVE</b>
    </div>
    <div id="smallCarousel" class="carousel slide bg-secondary-subtle" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($eksklusif as $index => $x)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('img/' . $x->FotoContent) }}" alt="Slide {{ $index + 1 }}" class="my-5 p-5 img-fluid" />
                </div>
            @endforeach
        </div>

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#smallCarousel"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#smallCarousel"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

</div>
