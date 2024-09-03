@extends('frontend.layouts.app')
@section('content')
<body>
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>{{ $berita->judul }}</h2>
                        <ul>
                            <li>By Admin</li>
                            <li>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ asset('storage/img-berita/thumb_lg_' . $berita->img_berita) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text" style="line-height: 1.6; text-align: justify;">
                            {!! $berita->detail !!}
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
</body>
@endsection