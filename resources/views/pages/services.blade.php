@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    @include('home.service')
    @include('home.done-project')
@endsection
