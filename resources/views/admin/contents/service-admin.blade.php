@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
<div class="row">
    @foreach ($services as $service)
        <div class="col-4 border text-center m-0 p-0">
            <p><strong>Icone :</strong>{{$service->icone}}</p>
            <p><strong>Service :</strong>{{$service->titre}}</p>
            <p><strong>Texte :</strong>{{$service->texte}}</p>
            <a class="btn btn-warning" href={{route('admin.service.edit',$service->id)}}>Modifier</a>

            <form action={{route('admin.service.delete',$service->id)}} method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
</div>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.service.create')}}>Ajouter</a>
    </div>
@endsection