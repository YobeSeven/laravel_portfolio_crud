@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1>SHOW ME</h1>
    <p>{{$portfolios->img}}</p>
    <p>{{$portfolios->filter}}</p>
    <p>{{$portfolios->title}}</p>
    <a href={{route('admin.portfolio')}}>Come back</a>
@endsection