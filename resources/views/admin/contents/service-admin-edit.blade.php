@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<h1 class="text-center">SERVICE EDIT</h1>
    <div class="container">
        <form action={{route('admin.service.update', $services->id)}} method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="icone"><strong>Icone :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="icone" value="{{$services->icone}}">
                    @error('icone')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror        
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="titre"><strong>Titre :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="titre" value="{{$services->titre}}">
                    @error('titre')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror        
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="texte"><strong>Texte :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="texte" value="{{$services->texte}}">
                    @error('texte')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror        
                </div>
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>

@endsection