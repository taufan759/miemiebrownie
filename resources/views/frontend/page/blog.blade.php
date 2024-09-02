@extends('frontend.layouts.app')
@section('content')
<body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="{{ asset('frontend/img/breadcrumb-bg3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="color: #3E2723">Miemie Brownie Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('storage/img-berita/thumb_md_' . $item->img_berita) }}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                                <h5>{{ $item->judul }}</h5>
                                <a href="{{ route('blogdetails', $item->id) }}">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
</body>
@endsection
