@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="container">
        <form action={{route('admin.skill.store')}} method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="techno"><strong>Techno :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="techno" value="{{old("techno")}}">
                    @error('techno')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror    
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="niveau"><strong>Niveau :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="niveau" value="{{old("niveau")}}">
                    @error('niveau')
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