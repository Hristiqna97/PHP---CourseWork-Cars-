@extends('layouts.app')


@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h2>Информацията за колата</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('makes.index') }}">Върни се към списъка</a>
        </div>
        <table class="table">

            <th style="background-color:aliceblue">Модел</th>
            <tr>
            <td> {{ $car->model->name}}</td>
            </tr>
            <th  style="background-color:aliceblue">Производител</th>
            <tr>
            <td> {{ $car->model->makes->name}}</td>
            </tr>
            <th  style="background-color:aliceblue">Година</th>
            <tr>
                <td>  {{$car->year}}</td>
            </tr>
            <th  style="background-color:aliceblue">Километри</th>
            <tr>
                <td>{{$car->km}}</td>
            </tr>
        </table>
    </div>

    </body>
    </html>
@endsection