@extends('layouts.app')

@section('content')
    @include('home.home-slider')
    @include('home.about')
    @include('home.counter')
    @include('home.service')
    @include('home.project')
    @include('home.testimony')
    @include('home.team')
    @include('home.recent-blog')
    @include('home.client')
@endsection
