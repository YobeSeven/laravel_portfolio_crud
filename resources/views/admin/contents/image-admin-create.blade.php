@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<h1 class="text-center">IMAGE CREATE</h1>
    <form action="{{route('admin.image.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="src">Mettez une image</label>
            <input type="file" name="src" id="src">
            @error('src')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <input class="btn btn-secondary" type="submit" value="Créez">
        <input class="btn btn-secondary" type="reset" value="Videz">
    </form>
@endsection