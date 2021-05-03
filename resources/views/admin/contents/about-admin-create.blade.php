@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">ABOUT CREATE</h1>
    <a class="btn" href={{route('admin.about')}}>Retour vers ABOUT</a>
    
    <div class="container">
        <form action={{route('admin.about.store')}} method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="naissance"><strong>Naissance :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="naissance" value="{{old("naissance")}}">
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
                    <input type="text" name="site" value="{{old("site")}}">
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
                    <input type="number" name="numero" value="{{old("numero")}}">
                    @error('numero')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="ville"><strong>Ville :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="ville" value="{{old("ville")}}">
                    @error('ville')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="age"><strong>Age :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="age" value="{{old("age")}}">
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
                    <input type="text" name="diplome" value="{{old("diplome")}}">
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
                    <input type="email" name="email" value="{{old("email")}}">
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
                    <input type="text" name="freelance" value="{{old("freelance")}}">
                    @error('freelance')
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