@extends('frontend.layout.app')
@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('frontend/assets/img/1.1.jpeg') }}" alt="..." />
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Discover the World of Books</span>
                    <span class="section-heading-lower">Online Bookstore</span>
                </h2>
                <p class="mb-3">Setiap buku dalam koleksi kami dikuratori dengan cermat, menawarkan berbagai pilihan genre, penulis, dan format. Dari buku terlaris hingga permata tersembunyi, kami memiliki buku yang sempurna untuk setiap pembaca.</p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">Explore Books</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-transparent">
    <div class="container">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading text-center mb-5 font-weight-bold">Featured Books</h2>
            <hr>
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($produk->chunk(3) as $index => $chunk)
                        <li data-target="#carouselExample" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($produk->chunk(3) as $index => $chunk)
                        <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $prod)
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card h-100 bg-transparent border-0 animate__animated animate__fadeInUp">
                                            <a href="#">
                                                <img class="card-img-top zoom-img" src="{{ $prod->image }}" alt="{{ $prod->judul }}">
                                            </a>
                                            <div class="card-body bg-transparent">
                                                <h4 class="card-title"><strong>{{ $prod->judul }}</strong></h4>
                                                <h5 class="card-subtitle"><strong>{{ $prod->penulis }}</strong></h5>
                                                <p class="card-text"><strong>Genre: {{ $prod->genre }}</strong></p>
                                                <p class="card-text">{{ $prod->sinopsis }}</p>
                                                <div class="d-flex justify-content-between align-items-center mt-3">
                                                    <strong>Rp.{{ $prod->harga_jual }}</strong>
                                                    <a href="{{ url('admin/produk/detail/'. $prod->id) }}" class="btn btn-primary animate__animated animate__fadeIn">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
