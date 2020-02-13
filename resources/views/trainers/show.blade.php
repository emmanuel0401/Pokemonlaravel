@extends('layouts.app')
@section('tittle', 'Trainer')

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<img style="height: 150px; width:150px; background-color=#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">

<div class="text-center">
<h5 class="card-title">{{$trainer->name}}</h5>
<p>some quick example text to build afoaijfioajfoaneoiniceaoisdnaoidna aosindoiansd
    asdsaaaaaaad ionro aosdnoa asoidn asnidoiad maodsmas oaindioad iaondsiasnd oias
    asdaspda naspdap pasdnpao asodn ajfn aosnde ho,a apsnas bb aksmd hermosa
</p>

<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

<form method="post" action="{{ url('/Trainer/'.$trainer->id) }}">
    {{csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar cliente?');" >Borrar </button>
    </form>
</div>    
<a href="/trainers" text-align="center" class="btn btn-Success"> Regresar</a>   
@endsection