@extends('frontend.layout.app')
@section('content')
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('frontend/assets/img/5.jpg') }}" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Discover the World of Books</span>
                            <span class="section-heading-lower">About Our Online Bookstore</span>
                        </h2>
                        <p>Founded in 2023, our online bookstore is committed to providing a wide range of books to book lovers worldwide. We strive to connect readers with their favorite authors and genres, making it easier for them to explore new literary worlds.</p>
                        <p class="mb-0">
                            Whether you're a fan of classic literature, contemporary fiction, non-fiction, or children's books, we have something for everyone. Our extensive collection includes bestsellers, new releases, and hidden gems from both established and emerging authors.
                        </p>
                        <p>
                            At our online bookstore, we believe in the power of books to educate, entertain, and inspire. We aim to create a seamless and enjoyable shopping experience for book enthusiasts, offering convenient browsing, secure transactions, and prompt delivery to your doorstep.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
