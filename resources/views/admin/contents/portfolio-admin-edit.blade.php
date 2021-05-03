@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">PORTFOLIO EDIT</h1>
    <a class="btn" href={{route('admin.portfolio')}}>Retour vers PORTFOLIO</a>

    <div class="container">
        <form action={{route('admin.portfolio.update', $portfolios->id)}} enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="img"><strong>Image :</strong></label>
                </div>
                <div class="col-1">
                    <input type="file" name="img" id="img">
                    @error('img')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="filter"><strong>Filter :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="filter" value="{{$portfolios->filter}}">
                    @error('filter')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="title"><strong>Title :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="title" value="{{$portfolios->title}}">
                    @error('title')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-secondary" type="submit">Envoyez</button>
        </form>
    </div>
@endsection