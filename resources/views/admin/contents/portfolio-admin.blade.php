@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="row">
        @foreach ($portfolios as $portfolio)
        <div class="col-3 border text-center m-0 p-0">
            <p><strong>Image :</strong>{{$portfolio->img}}</p>
            <p><strong>Filter :</strong>{{$portfolio->filter}}</p>
            <p><strong>Title :</strong>{{$portfolio->title}}</p>
            <a class="btn btn-warning" href={{route('admin.portfolio.edit', $portfolio->id)}}>Modifier</a>
            <form action={{route('admin.portfolio.delete', $portfolio->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
            <a class="btn btn-primary" href={{route('admin.portfolio.show', $portfolio->id)}}>Show me</a>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.portfolio.create')}}>Ajouter</a>
    </div>
@endsection