@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Производител</h2>
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
            <th>Име</th>
            <th>Година</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($makes as $make)
            <tr>
                <td id="thumbnailId{{ $makes->id }}">
                    {{ $makes->id}}
                </td>
                <td>{{ $makes->makes->name }}</td>
                <td>{{ $makes->year}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('makes.show',$makes->id) }}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{ route('makes.edit',$makes->id }}">Редактирай</a>
                    <form method="delete" action="{{route('makes.delete',$makes->id)}}" style="display:inline">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $makes->links() !!}

@endsection