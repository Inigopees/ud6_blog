@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <b><label>Titulo</label></b><br>
            <input type="text" name="titulo" id="titulo" value="{{$Post->title}}" readonly><br>
            <b><label>Descripción</label></b><br>
            <textarea cols="150" rows="5" name="descripcion" id="descripcion" readonly>{{$Post->body}}</textarea><br>       
            <b><label>Mensaje</label></b><br>
            <textarea cols="150" rows="5" name="mensaje" id="mensaje" readonly>{{$Post->body}}</textarea>
                
        </div>
    </div>
</div>
@endsection
