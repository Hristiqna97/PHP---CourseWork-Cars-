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


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Производител(марка)</th>
            <th>Модел</th>
            <th>Година</th>
            <th width="280px">Километри</th>
            <th>&nbsp;</th>
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
                    <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{ route('cars.edit',$car->id) }}">Редактирай</a>
                    <form method="delete" action="{{route('cars.delete',$car->id)}}" style="display:inline">
                        <button type="submit" class="btn btn-danger">Delete</button>
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