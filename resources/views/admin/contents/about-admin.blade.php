@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">ABOUT</h1>
    
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naissance</th>
                <th scope="col">Site</th>
                <th scope="col">Numero</th>
                <th scope="col">Ville</th>
                <th scope="col">Age</th>
                <th scope="col">Diplome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Freelance</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$about->naissance}}</td>
                <td>{{$about->site}}</td>
                <td>{{$about->numero}}</td>
                <td>{{$about->ville}}</td>
                <td>{{$about->age}}</td>
                <td>{{$about->diplome}}</td>
                <td>{{$about->email}}</td>
                <td>{{$about->freelance}}</td>
                <td>
                    <a class="btn btn-warning" href={{route('admin.about.edit', $about->id)}}>Modifier</a>
                </td>
                <td>
                    <form action={{route('admin.about.delete',$about->id)}} method="POST">
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
        <a class="btn btn-success" href={{route('admin.about.create')}}>Ajouter</a>
    </div>
@endsection