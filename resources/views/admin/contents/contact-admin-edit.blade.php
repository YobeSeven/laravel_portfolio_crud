@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">CONTACT EDIT</h1>
    <a class="btn" href={{route('admin.contact')}}>Retour vers CONTACT</a>
    
    <div class="container">
        <form action="{{route('admin.contact.update',$contacts->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="location"><strong>Location :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="location" value="{{$contacts->location}}">
                    @error('location')
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
                    <input type="email" name="email" value="{{$contacts->email}}">
                    @error('email')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="call"><strong>Call :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="call" value="{{$contacts->call}}">
                    @error('call')
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