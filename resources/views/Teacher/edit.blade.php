@extends('layouts.app')


@section('content')

<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left" style="font-size: 22px;">
                Edit Teacher
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">


            @if (count($errors) > 0)
            <div class="col-lg-12 margin-tb">

                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            {!! Form::model($teacher, ['method' => 'PATCH','route' => ['teacher.update', $teacher->id]]) !!}
            <div class="">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Education:</strong>
                        {!! Form::text('education', null, array('placeholder' => 'Education','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection