@extends('layouts.app')

@section('content')

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
            <th>name</th>
            <th>year</th>
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
                    <a class="btn btn-info" href="{{ route('makes.show',$make->id) }}" target="_blank">Покажи</a>
                    <a class="btn btn-primary" href="{{ route('makes.edit',$make->id) }}">Редактирай</a>
                    <form method="delete" action="{{route('makes.delete',$make->id)}}" style="display:inline">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $makes->links() !!}

@endsection