@extends('layouts.fixed')

@section('title','AdminLTE 2 | Advance Form Elements')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create User</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Edit  User</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fas fa-times"></i></button>
                </div>
                <br>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    {{ Form::model($user,['action' =>['UserController@update',$user->id],'id' => 'form']) }}
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            {{ Form::label(' Name:') }}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                {{ Form::text('name',null,['class'=>'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('User Name:') }}

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                {{ Form::text('username',null,['class'=>'form-control'])}}
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            {{ Form::label('Email:') }}

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                {{ Form::text('email',null,['class'=>'form-control'])}}
                            </div>
                            <!-- /.input group -->
                        </div>
                        {{--<div class="form-group">--}}
                            {{--{{ Form::label('Password:') }}--}}

                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon">--}}
                                    {{--<i class="fas fa-calendar-alt"></i>--}}
                                {{--</div>--}}
                                {{--{{ Form::text('password',null,['class'=>'form-control'])}}--}}
                            {{--</div>--}}
                            {{--<!-- /.input group -->--}}
                        {{--</div>--}}
                        <div class="form-group">
                            {{ Form::label('User Role:') }}

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                {{ Form::select('role_id',$roles,null,['class'=>'form-control'])}}
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>

                    {{Form::close()}}

                </div>
                <!-- /.col -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('style')



@stop

@section('script')



    <!-- Page script -->
    <script>

    </script>

@stop