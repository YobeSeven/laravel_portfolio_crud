@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="container">
        <form action="{{route('admin.contact.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="location"><strong>Location :</strong></label>
                </div>
                <div class="col-1">
                    <input type="text" name="location" value="{{old("location")}}">
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
                    <label for="call"><strong>Call :</strong></label>
                </div>
                <div class="col-1">
                    <input type="number" name="call" value="{{old("call")}}">
                    @error('call')
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