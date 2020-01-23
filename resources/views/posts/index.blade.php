@extends('layouts.app')

@section('content')
<br>
  <!-- Page Content -->
  <div class="container">
  <a href= "{{route('Post.create')}}"><button type="button" class="btn btn-secondary">New Post</button></a><br><br>
  

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Fecha/Hora</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      </thead>
    <tbody>
      @foreach ($Posts as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{date("j/m/Y H:i:s", strtotime($p->published_at))}}</td>
        <td>
          <a title="Ver" href="{{route ('Post.show',$p->id)}}"><i class="fa fa-eye" style="color:black"></i></a>
        </td>
        <td>
          <a title="Editar" href="{{route ('Post.edit',$p->id)}}"><i class="fa fa-pencil" style="color:black"></i></a>
        </td>
        <td>
          <a title="Delete" href="{{route ('delete',$p->id)}}"><i class="fa fa-trash" style="color:black"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.container -->

  @endsection