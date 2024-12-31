@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/bg_3.jpg);">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading subheading-with-line"><small class="pr-2 bg-white">About</small></span>
                            <h2 class="mb-4">Helping businesses &amp; organizations succeed with effortless website creation.</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p><b>Dibantu</b> is a revolutionary platform that empowers individuals and organizations to promote
                            and
                            grow their products or services through modern website technology. Focused on digital
                            transformation, <b>Dibantu</b> offers an easy and affordable solution for small businesses,
                            orphanages,
                            and social organizations to enhance their digital presence. Users can create professional,
                            visually appealing websites without needing technical skills, making digital technology more
                            inclusive and accessible.</p>
                        <p>With intuitive features like responsive designs, digital marketing tools, and simple content
                            management, <b>Dibantu</b> is committed to helping communities reach wider audiences and
                            maximize their
                            potential in the digital era. We believe everyone deserves the opportunity to thrive and compete
                            in today’s rapidly evolving world.
                        </p>
                        <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-4">
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Mission</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Vission</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-4 ftco-animate">
                    <h3 class="h4">Mosaic</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
        </div>
    </section>

    @include('home.counter')
    @include('home.testimony')
@endsection
