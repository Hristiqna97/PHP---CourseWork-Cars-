@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Производители</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('makes.create') }}"> Добави нов производител</a>
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
            <th>Име на производител</th>
            <th>Година на създаване</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($makes as $make)
            <tr>
                <td id="thumbnailId{{ $make->id }}">
                    {{ $make->id}}
                </td>
                <td>{{ $make->name }}</td>
                <td>{{ $make->year}}</td>
                <td>
                    <a class="btn btn-info" href="{{action('MakesController@show', $make->id)}}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{action('MakesController@edit', $make->id)}}">Редактирай</a>
                    <form action="{{action('MakesController@destroy', $make->id )}}" method="post" style="display:inline-block" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $makes->links() !!}

@endsection