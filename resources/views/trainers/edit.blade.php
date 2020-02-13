@extends('layouts.app')
@section('tittle', 'Trainer Edit')
@section('content') 
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <img style="height: 150px; width:150px; background-color=#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">

    <div class="form-group">
    <label for="">Nombre </label>
    <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Slug </label>
        <input type="text" slug="slug" value="{{$trainer->slug}}" class="form-control">
        </div>

    <div class="form-group">
        <label for="">Avatar </label>
        <input type="file" name="avatar">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="/trainers/{{$trainer->name}}" class="btn btn-success">Regresar</a>
</form>
@endsection
