@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="container">
        <form action={{route('admin.fact.store')}} method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="clients"><strong>Clients :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="clients" value="{{old("clients")}}">
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
                    <input type="number" name="projets" value="{{old("projets")}}">
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
                    <input type="number" name="support" value="{{old("support")}}">
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
                    <input type="number" name="workers" value="{{old("workers")}}">
                    @error('workers')
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