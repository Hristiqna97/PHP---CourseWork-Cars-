@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                        <form method="post" action="{{url('cars')}}" enctype="multipart/form-data">

                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Модел</label>
                                <div class="col-sm-10">
                                    <select name="model_id">
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Година</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="year" name="year">
                                </div>
                            </div>
                                <div class="form-group row">
                                    {{csrf_field()}}
                                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Километри</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="km" name="km">
                                    </div>
                                </div>


                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





