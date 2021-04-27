@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="row">
        @foreach ($abouts as $about)
        <div class="col-3 border text-center m-0 p-0">
            <p>{{$about->naissance}}</p>
            <p>{{$about->site}}</p>
            <p>{{$about->numero}}</p>
            <p>{{$about->ville}}</p>
            <p>{{$about->age}}</p>
            <p>{{$about->diplome}}</p>
            <p>{{$about->email}}</p>
            <p>{{$about->freelance}}</p>

            <a class="btn btn-warning" href={{route('admin.about.edit', $about->id)}}>Modifier</a>

            <form action={{route('admin.about.delete',$about->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.about.create')}}>Ajouter</a>
    </div>
@endsection