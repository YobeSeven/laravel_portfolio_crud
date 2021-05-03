@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<h1 class="text-center">CONTACT</h1>
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Location</th>
                <th scope="col">E-mail</th>
                <th scope="col">Call</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$contact->location}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->call}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('admin.contact.edit', $contact->id)}}">Modifier</a>
                    </td>
                    <td>
                        <form action={{route('admin.contact.delete', $contact->id)}} method="POST">
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
        <a class="btn btn-success" href={{route('admin.contact.create')}}>Ajouter</a>
    </div>
@endsection