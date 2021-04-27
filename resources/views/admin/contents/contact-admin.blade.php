@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <div class="row">
        @foreach ($contacts as $contact)
        <div class="col-4 border text-center m-0 p-0">
            <p><strong>Location :</strong>{{$contact->location}}</p>
            <p><strong>E-mail :</strong>{{$contact->email}}</p>
            <p><strong>Call :</strong>{{$contact->call}}</p>

            <a class="btn btn-warning" href="{{route('admin.contact.edit', $contact->id)}}">Modifier</a>

            <form action={{route('admin.contact.delete', $contact->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.contact.create')}}>Ajouter</a>
    </div>
@endsection