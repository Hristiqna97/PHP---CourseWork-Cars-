@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>modeli</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('models.create') }}"> Добави нов model</a>
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
            <th>Name</th>
            <th>Makes_ID</th>

            <th>&nbsp;</th>
        </tr>
        @foreach ($models as $model)
            <tr>
                <td id="thumbnailId{{ $models->id }}">
                    {{ $models->id}}
                </td>
                <td>{{ $models->name }}</td>
                <td>{{ $models->makes_id->makes->name }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('models.show',$model->id) }}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{ route('models.edit',$model->id) }}">Редактирай</a>
                    <form method="delete" action="{{route('models.delete',$model->id)}}" style="display:inline">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $models->links() !!}

@endsection