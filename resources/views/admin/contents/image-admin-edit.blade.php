@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<h1 class="text-center">IMAGE EDIT</h1>
    <form action={{route('admin.image.update',$image->id)}} enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="src">Modifier votre image</label>
            <input type="file" name="src" id="src">
            @error('src')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection