@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Поправи автомобил
                        <a href="{{ URL::to('cars') }}" class="pull-right">Списък</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <form method="post" action="{{action('CarsController@update', $cars->id)}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Производител</label>
                                <div class="col-sm-10">
                                    <select name="model_id">
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--<div class="form-group row">--}}
                                {{--<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Модел</label>--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="model_id" value="{{$cars->model->name}}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group row">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Година</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="year" value="{{$cars->year}}">
                                </div>
                                <div class="form-group row">
                                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Километри</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="km" value="{{$cars->km}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection