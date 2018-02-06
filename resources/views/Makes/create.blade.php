@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Sample
                        <a href="{{ URL::to('makes') }}" class="pull-right">List all</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif



                        <form method="post" action="{{url('makes')}}" enctype="multipart/form-data">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="customImage" class="col-sm-2 col-form-label col-form-label-lg">Year</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-lg" id="customImage" placeholder="year" name="year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject_id" class="col-sm-2 col-form-label col-form-label-lg">Sample</label>
                                <div class="col-sm-10">
                                    {{-- {!! Form::select('subject_id', $subjectLists, null, ['class' => 'form-control']) !!}--}}
                                    <?php if (!empty($makesLists)):?>
                                    <select name="id" class="form-control">
                                        <?php foreach($makesLists as $key => $value):?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php endif; ?>

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