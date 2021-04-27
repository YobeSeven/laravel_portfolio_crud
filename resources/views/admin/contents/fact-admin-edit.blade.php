@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="container">
        <form action={{route('admin.fact.update',$facts->id)}} method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1">
                    <label for="clients"><strong>Clients :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="clients" value="{{$facts->clients}}">
                    @error('clients')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="projets"><strong>Projets :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="projets" value="{{$facts->projets}}">
                    @error('projets')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="support"><strong>Support :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="support" value="{{$facts->support}}">
                    @error('support')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="workers"><strong>Workers :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="workers" value="{{$facts->workers}}">
                    @error('workers')
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