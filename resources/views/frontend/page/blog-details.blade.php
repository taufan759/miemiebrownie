@extends('frontend.layouts.app')
@section('content')
<body>
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, eius!</h2>
                        <ul>
                            <li>By Admin</li>
                            <li>February 21, 2019</li>
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
                        <img src="{{ asset('frontend/img/hero/hero.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        {{-- <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> --}}
                        <div class="blog__details__text">
                            <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo adipisci cupiditate reprehenderit recusandae quidem, totam ducimus maxime hic qui quibusdam consequatur quod, mollitia ea sint minima amet obcaecati. Aliquid nobis necessitatibus dolore laudantium qui assumenda recusandae nisi perspiciatis. Eius autem repellendus atque asperiores sint quidem quos doloremque nihil fuga ex quaerat quam a libero fugiat esse, nobis modi at deleniti provident quis similique, perferendis eos dignissimos. Sed eius dignissimos quisquam voluptatibus laudantium debitis architecto eum temporibus nihil quos nobis distinctio blanditiis expedita sapiente eligendi ut veniam doloribus, provident ab totam, voluptates ipsum dicta! Reprehenderit deserunt consequatur quasi dignissimos placeat?</p>
                            <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio in eligendi porro ea architecto iure consectetur quibusdam similique culpa minima ipsa facere ipsam ex nulla ratione adipisci ab aliquam exercitationem, autem commodi dolorem iusto! Sed provident eveniet veritatis voluptates et ipsam vel reiciendis repellendus, libero inventore, quo quod laboriosam similique.</p>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“Lorem ipsum dolor sit amet.”</p>
                            <h6>LOREM</h6>
                        </div>
                        <div class="blog__details__text">
                            <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo adipisci cupiditate reprehenderit recusandae quidem, totam ducimus maxime hic qui quibusdam consequatur quod, mollitia ea sint minima amet obcaecati. Aliquid nobis necessitatibus dolore laudantium qui assumenda recusandae nisi perspiciatis. Eius autem repellendus atque asperiores sint quidem quos doloremque nihil fuga ex quaerat quam a libero fugiat esse, nobis modi at deleniti provident quis similique, perferendis eos dignissimos. Sed eius dignissimos quisquam voluptatibus laudantium debitis architecto eum temporibus nihil quos nobis distinctio blanditiis expedita sapiente eligendi ut veniam doloribus, provident ab totam, voluptates ipsum dicta! Reprehenderit deserunt consequatur quasi dignissimos placeat?</p>
                            <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio in eligendi porro ea architecto iure consectetur quibusdam similique culpa minima ipsa facere ipsam ex nulla ratione adipisci ab aliquam exercitationem, autem commodi dolorem iusto! Sed provident eveniet veritatis voluptates et ipsam vel reiciendis repellendus, libero inventore, quo quod laboriosam similique.</p>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="{{ asset('frontend/img/blog/details/blog-author.jpg')}}" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>Admin</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="#">#infotegal</a>
                                        <a href="#">#exploretegal</a>
                                        <a href="#">#oleholehtegal</a>
                                        <a href="#">#miemiebrownie</a>
                                        <a href="#">#brownie</a>
                                        <a href="#">#enak</a>
                                        <a href="#">#viral</a>
                                        <a href="#">#review</a>
                                        <a href="#">#jalanjalan</a>
                                        <a href="#">#oleholeh</a>
                                        <a href="#">#hits</a>
                                        <a href="#">#bingkisan</a>
                                        <a href="#">#day </a>
                                        <a href="#">#gift</a>
                                        <a href="#">#hampers</a>
                                        <a href="#">#instagood</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
</body>
@endsection