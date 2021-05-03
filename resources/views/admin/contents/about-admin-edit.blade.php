@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">ABOUT EDIT</h1>
    <a class="btn" href={{route('admin.about')}}>Retour vers ABOUT</a>

    <div class="container">
        <form action={{route('admin.about.update', $abouts->id)}} method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="naissance"><strong>Naissance :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="naissance" value="{{$abouts->naissance}}">
                    @error('naissance')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="site"><strong>Site :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="site" value="{{$abouts->site}}">
                    @error('site')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="numero"><strong>Numero :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="numero" value="{{$abouts->numero}}">
                    @error('numero')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror    
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="ville"><strong>Ville :</strong></label>7
                </div>
                <div class="col-1">
                    <input type="text" name="ville" value="{{$abouts->ville}}">
                    @error('ville')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror    
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="age"><strong>Age :</strong></label>7
                </div>
                <div class="col-1">
                    <input type="number" name="age" value="{{$abouts->age}}">
                    @error('age')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="diplome"><strong>Diplome :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="diplome" value="{{$abouts->diplome}}">
                    @error('diplome')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="email"><strong>E-mail :</strong></label>
                </div>
                <div class="col-1">
                    <input type="email" name="email" value="{{$abouts->email}}">
                    @error('email')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="freelance"><strong>Freelance :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="freelance" value="{{$abouts->freelance}}">
                    @error('freelance')
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