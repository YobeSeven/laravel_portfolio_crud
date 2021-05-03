@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">SKILL EDIT</h1>
    <a class="btn" href={{route('admin.skill')}}>Retour vers SKILL</a>
    
    <div class="container">
        <form action={{route('admin.skill.update', $skills->id)}} method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="techno"><strong>Techno</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="techno" value="{{$skills->techno}}">
                    @error('techno')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="niveau"><strong>Niveau</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="niveau" value="{{$skills->niveau}}">
                    @error('niveau')
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