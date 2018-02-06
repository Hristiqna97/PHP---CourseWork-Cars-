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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('makes.index') }}">Върни се към списъка</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="container">
                    <h2>Информацията за производителите</h2>
                    <table class="table">

                        <th style="background-color:aliceblue">Име на производитела</th>
                        <tr>
                            <td> {{ $make->name}}</td>
                        </tr>
                        <th  style="background-color:aliceblue">Година</th>
                        <tr>
                            <td> {{ $make->year}}</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>
@endsection