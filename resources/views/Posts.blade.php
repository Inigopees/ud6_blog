@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Fecha/Hora</th>
                    </tr>
                </thead>
                @foreach($Posts as $Post)
                    <tr>
                        <td scope="row">{{$Post->id}}</td>
                        <td>{{$Post->title}}</td>
                        <td>{{$Post->published_at}}</td>
                        <td><a title="Editar" href="{{route ('Post.edit',$Post->id)}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                        <td><a title="Ver" href="{{route ('post.show,$Post->id')"><i class="fa fa-eye" style="color:black"></i></a></td>
                        <td><a title="Delete" href="{{route ('Post.destroy',$p->id)}}"><i class="fa fa-trash" style="color:black"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
