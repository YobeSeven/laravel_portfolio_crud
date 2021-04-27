@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="container">
        <form action={{route('admin.portfolio.store')}} method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="img"><strong>Image :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="img" value="{{old("img")}}">
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
                    <input type="text" name="filter" value="{{old("filter")}}">
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
                    <input type="text" name="title" value="{{old("title")}}">
                    @error('title')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <input class="btn btn-secondary" type="submit" value="Créez">
            <input class="btn btn-secondary" type="reset" value="Videz">
        </form>    
    </div>
@endsection