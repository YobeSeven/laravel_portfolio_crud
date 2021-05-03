@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">SERVICE</h1>
    
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th>
                <th scope="col">Service</th>
                <th scope="col">Texte</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$service->icone}}</td>
                <td>{{$service->titre}}</td>
                <td>{{$service->texte}}</td>
                <td>
                    <a class="btn btn-warning" href={{route('admin.service.edit',$service->id)}}>Modifier</a>
                </td>
                <td>
                    <form action={{route('admin.service.delete',$service->id)}} method="post">
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
        <a class="btn btn-success" href={{route('admin.service.create')}}>Ajouter</a>
    </div>
@endsection