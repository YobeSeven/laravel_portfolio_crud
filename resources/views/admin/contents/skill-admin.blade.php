@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">SKILL</h1>
    
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Techno</th>
                <th scope="col">Niveau</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$skill->techno}}</td>
                    <td>{{$skill->niveau}}</td>
                    <td>
                        <a class="btn btn-warning" href={{route('admin.skill.edit', $skill->id)}}>Modifier</a>
                    </td>
                    <td>
                        <form action={{route('admin.skill.delete', $skill->id)}} method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.skill.create')}}>Ajouter</a>
    </div>

@endsection