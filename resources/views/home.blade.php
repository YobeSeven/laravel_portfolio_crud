@extends('layouts.index')

@section('content')
    @include('components.header')
    @include('components.hero')
    <main id="main">
        @include('components.about')
        @include('components.facts')
        @include('components.skills')
        @include('components.pasTouche.resumer')
        @include('components.portfolio')
        @include('components.services')
        @include('components.pasTouche.testimonials')
        @include('components.contact')
    </main>
    @include('components.footer')
@endsection