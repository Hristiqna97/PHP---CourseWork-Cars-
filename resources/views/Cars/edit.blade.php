@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:brown;">Редакция на кола</h2>
            </div>
        </div>
    </div>
       <form method="edit" action="/cars/edit/{{$car->id}}" style="display:inline">
           @include('cars.form')
       <!-- <button type="submit" class="btn btn-danger">Edit</button> -->
    </form>
    <div class="pull-right">
        <br/>
        <a class="btn btn-primary" href="{{ route('cars') }}"> Обратно</a>
    </div>


    @endsection