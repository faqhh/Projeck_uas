@extends('frontend.layout.app')
@section('content')
@foreach ($produk as $prod)
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ $prod->image }}" alt="{{ $prod->judul }}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <div>
                            <h2 class="section-heading mb-4">{{ $prod->judul }}</h2>
                            <h5>{{ $prod->penulis }}</h5>
                            {{-- <p class="mt-3"><strong>Genre:</strong> {{ $prod->genre }}</p> --}}
                            <p class="mt-3"><strong>Sinopsis:</strong></p>
                            <p>{{ $prod->sinopsis }}</p>
                            <p class="mt-3"><strong>Harga:</strong> {{ $prod->harga_jual }}</p>
                            <a href="{{ url('frontend/home') }}" class="btn btn-primary">Back to Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
