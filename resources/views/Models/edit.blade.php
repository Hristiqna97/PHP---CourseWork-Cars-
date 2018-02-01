@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Редакция на модел</h2>
            </div>
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('models') }}"> Обратно</a>
            </div>
        </div>
    </div>
    <form method="edit" action="/models/edit/{{$car->id}}" style="display:inline">
        @include('models.form')
        <button type="submit" class="btn btn-danger">Edit</button>
    </form>

@endsection