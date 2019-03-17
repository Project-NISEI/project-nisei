@extends('layouts.default')

@section('page-title', 'NISEI - Products')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Products'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row masonry-grid">
                @foreach ($products as $product)
                    <div class="col-sm-12 col-lg-6 grid-item">
                        <a class="article-card" href="/products/{{ $product->slug }}">
                            @if ($product->listing_image)
                                <img src="{{ $product->listing_image }}" alt="{{ $product->title }}" class="article-card__image">
                            @endif
                            <p class="article-card__name">{{ $product->title }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        var grids = document.querySelectorAll('.masonry-grid');
        imagesLoaded( grids, function() {
            for (let x = 0; x < grids.length; x++) {
                let grid = grids[x];
                var msnry = new Masonry( grid, {
                    itemSelector: '.grid-item'
                });
            }
        });
    </script>
@stop
