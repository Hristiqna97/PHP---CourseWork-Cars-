@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Cars
                        <a href="{{ URL::to('cars') }}" class="pull-right">List all</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        <form method="post" action="{{action('cars.edit', $id)}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">model_id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="model_id" name="model_id" value="{{$cars->model_id}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">year</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="year" name="year" value="{{$cars->year}}">
                                </div>
                                <div class="form-group row">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="PATCH">
                                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">km</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="km" name="year" value="{{$cars->km}}">
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