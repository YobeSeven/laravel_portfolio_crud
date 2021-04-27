@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="row">
        @foreach ($skills as $skill)
            <div class="col-4 border text-center m-0 p-0">
                <p><strong>Techno</strong> : {{$skill->techno}}</p>
                <p><strong>Niveau</strong> : {{$skill->niveau}}</p>

                <a class="btn btn-warning" href={{route('admin.skill.edit', $skill->id)}}>Modifier</a>

                <form action={{route('admin.skill.delete', $skill->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.skill.create')}}>Ajouter</a>
    </div>

@endsection