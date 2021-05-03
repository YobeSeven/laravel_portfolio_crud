@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<h1 class="text-center">FACT</h1>
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Clients</th>
                <th scope="col">Projets</th>
                <th scope="col">Support</th>
                <th scope="col">Workers</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facts as $fact)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$fact->clients}}</td>
                    <td>{{$fact->projets}}</td>
                    <td>{{$fact->support}}</td>
                    <td>{{$fact->workers}}</td>
                    <td>
                        <a class="btn btn-warning" href={{route('admin.fact.edit', $fact->id)}}>Modifier</a>
                    </td>
                    <td>
                        <form action={{route('admin.fact.delete', $fact->id)}} method="POST">
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
        <a class="btn btn-success" href="{{route('admin.fact.create')}}">Ajouter</a>
    </div>
@endsection