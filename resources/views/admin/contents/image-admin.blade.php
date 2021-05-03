@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">IMAGE</h1>
    
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Image</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="3">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$image->src}}</td>
                    <td>
                        <img width="5%" src="{{asset('img/'.$image->src)}}" alt="">
                    </td>
                    <td>
                        <a class="btn btn-warning" href={{route('admin.image.edit',$image->id)}}>Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('admin.image.delete', $image->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-info" href={{route('admin.image.download',$image->id)}}>Telecharger</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-5">
        <a class="btn btn-success" href="{{route('admin.image.create')}}">Ajouter</a>
    </div>

@endsection