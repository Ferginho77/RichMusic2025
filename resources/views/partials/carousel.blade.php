<div>
    <div id="carouselExampleAutoplaying" class="carousel slide bg-secondary mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($events as $index => $event)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('img/' . $event->FotoContent) }}" alt="Slide {{ $index + 1 }}" class="my-5 p-5 img-fluid" />
                </div>
            @endforeach
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
