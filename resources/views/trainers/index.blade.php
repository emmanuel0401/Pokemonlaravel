@extends('layouts.app')
@section('tittle', 'Trainers')

@section('content')

<div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top:40px;">
                    <img style="height: 100px; width:100px; background-color=#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
                        <div class="car-body">
                        <h5 class="carc-tittle">{{$trainer->name}}</h5>
                        <p class="card-text">some quick example text to build afoaijfioajfoaneoiniceaoisdnaoidna aosindoiansd</p>
                        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary"> ver mas</a>
                    </div>
                </div>
            </div>
        @endforeach
</div>
@endsection