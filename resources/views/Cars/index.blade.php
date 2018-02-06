@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Коли</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cars.create') }}"> Добави нов автомобил</a>
            </div>
        </div>
    </div>


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Производител(марка)</th>
            <th>Модел</th>
            <th>Година</th>
            <th width="280px">Километри</th>
            <th>Actions</th>
        </tr>
        @foreach ($cars as $car)
            <tr>
                <td id="thumbnailId{{ $car->id }}">
                    {{ $car->id}}
                </td>
                <td>{{ $car->model->makes->name }}</td>
                <td>{{ $car->model->name }}</td>
                <td>{{ $car->year}}</td>
                <td>{{ $car->km}}</td>
                <td>
                    <a class="btn btn-info" href="{{action('CarsController@show', $car->id)}}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{action('CarsController@edit', $car->id)}}">Редактирай</a>
                    <form action="{{action('CarsController@destroy', $car->id )}}" method="post" style="display:inline-block" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    <div class="row col-6 text-center">
        <form action="" method="get">
            <fieldset>
                <legend>Търсене</legend>
                <label for="year">Година </label>
                <input id="year" name="year" type="text"><br />

                <input type="submit" class="btn btn-primary" value="Търси">
            </fieldset>
        </form>
    </div><br>
    {!! $cars->links() !!}

@endsection