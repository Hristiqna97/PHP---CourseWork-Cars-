@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Модели</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('models.create') }}"> Добави нов модел</a>
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
            <th>Име на модела</th>
            <th>Производител,на когото моделът принадлежи</th>
            <th>Actions&nbsp;</th>
        </tr>
        @foreach ($models as $model)
            <tr>
                <td id="thumbnailId{{ $model->id }}">
                    {{ $model->id}}
                </td>
                <td>{{ $model->name }}</td>
                <td>{{ $model->makes->name}}</td>
                <td>
                    <a class="btn btn-info" href="{{action('ModelsController@show', $model->id)}}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{action('ModelsController@edit', $model->id)}}">Редактирай</a>
                    <form action="{{action('ModelsController@destroy', $model->id )}}" method="post" style="display:inline-block" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $models->links() !!}

@endsection