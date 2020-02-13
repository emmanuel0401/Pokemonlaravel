@extends('layouts.app')
@section('tittle', 'Trainers Create')
@section('content') 
    @include('common.errors')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf

    @include('trainers.form')
    

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection

    
  