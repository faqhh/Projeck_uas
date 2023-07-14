@extends('frontend.layout.app')
@section('content')
@foreach ($produk as $prod)
@if ($prod->genre == 'inspiratif')
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{ $prod->penulis }}</span>
                        <span class="section-heading-lower">{{ $prod->judul }}</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset($prod->image) }}" alt="{{ $prod->judul }}" />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0"><strong>Genre:</strong> {{ $prod->genre }}</p>
                    <p>{{ $prod->sinopsis }}</p>
                    <p><strong>Harga:</strong> {{ $prod->harga_jual }}</p>
                    <a href="{{ url('frontend/home') }}" class="btn btn-primary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
@endsection
