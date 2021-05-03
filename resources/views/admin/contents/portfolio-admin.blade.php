@extends('layouts.index-back')
@include('layouts.flash')

@section('content-admin')
    <h1 class="text-center">PORTFOLIO</h1>

    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Image</th>
                <th scope="col">Image</th>
                <th scope="col">Filter</th>
                <th scope="col">Title</th>
                <th scope="col" colspan="4">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$portfolio->img}}</td>
                    <td>
                        <img width="50%" src={{asset('img/portfolio/'.$portfolio->img)}} alt="">
                    </td>
                    <td>{{$portfolio->filter}}</td>
                    <td>{{$portfolio->title}}</td>
                    <td>
                        <a class="btn btn-warning" href={{route('admin.portfolio.edit', $portfolio->id)}}>Modifier</a>
                    </td>
                    <td>
                        <form action={{route('admin.portfolio.delete', $portfolio->id)}} method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-info" href={{route('admin.portfolio.download',$portfolio->id)}}>Télécharger</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href={{route('admin.portfolio.show', $portfolio->id)}}>Montrer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-5">
        <a class="btn btn-success" href={{route('admin.portfolio.create')}}>Ajouter</a>
    </div>
@endsection