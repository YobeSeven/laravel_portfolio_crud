@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">SERVICE CREATE</h1>
    <a class="btn" href={{route('admin.service')}}>Retour vers SERVICE</a>
    
    <div class="container">
        <form action={{route('admin.service.store')}} method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="icone"><strong>Icone :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="icone" value="{{old("icone")}}">
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
                    <input type="text" name="titre" value="{{old("titre")}}">
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
                    <input type="text" name="texte" value="{{old("texte")}}">
                    @error('texte')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror    
                </div>
            </div>
            <div>
                <input class="btn btn-secondary" type="submit" value="Créez">
                <input class="btn btn-secondary" type="reset" value="Videz">
            </div>
        </form>    
    </div>
@endsection