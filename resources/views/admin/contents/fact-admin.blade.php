@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="row">
        @foreach ($facts as $fact)
            <div class="col-3 border text-center m-0 p-0">
                <p>Clients : {{$fact->clients}}</p>
                <p>Projets : {{$fact->projets}}</p>
                <p>Support : {{$fact->support}}</p>
                <p>Workers : {{$fact->workers}}</p>
                <a class="btn btn-warning" href={{route('admin.fact.edit', $fact->id)}}>Modifier</a>
                <form action={{route('admin.fact.delete', $fact->id)}} method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href="{{route('admin.fact.create')}}">Ajouter</a>
    </div>
@endsection