@extends('layouts.fixed')

@section('title','AdminLTE 2 | Advance Form Elements')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Create Module</a></li>

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
                    {{ Form::open(['action' => 'ModuleController@store_menu','method'=>'post','id' => 'form']) }}
                     <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                                {{ Form::label('Module Name') }}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{ Form::select('module_id',$module,null,['class'=>'form-control select2','style'=>'width:100%','placeholder'=>'----Select Module Name----']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('Module Menu:') }}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{ Form::text('tree_view',null,['class'=>'form-control'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label>Date masks:</label>--}}
                                {{ Form::label('Tree View:') }}

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{ Form::text('menu',null,['class'=>'form-control'])}}
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                {{ Form::label('Module Icon:') }}

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{ Form::text('module_icon',null,['class'=>'form-control','data-inputmask'=>'"alias": "dd/mm/yyyy"','data-mask']) }}
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                {{ Form::label('URL:') }}

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{--<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>--}}
                                    {{ Form::text('url',null,['class'=>'form-control']) }}
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                {{--<label>Date masks:</label>--}}
                                {{ Form::label('Module Key:') }}

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    {{--<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>--}}
                                    {{ Form::text('module_key',null,['class'=>'form-control']) }}
                                </div>
                                <!-- /.input group -->
                            </div>
                         {{--<!-- checkbox -->--}}
                            {{--<div class="form-group">--}}
                                {{--<label>--}}
                                    {{--checkbox :--}}
                                {{--</label>--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" class="minimal" checked>--}}
                                    {{--{{ Form::checkbox('checkbox1',1,true,['class'=>'minimal']) }}--}}
                                {{--</label>--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" class="minimal">--}}
                                    {{--{{ Form::checkbox('checkbox2',1,null,['class'=>'minimal']) }}--}}
                                {{--</label>--}}

                            {{--</div>--}}

                            {{--<!-- radio -->--}}
                            {{--<div class="form-group">--}}
                                {{--<label>--}}
                                    {{--radio :--}}
                                {{--</label>--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="r1" class="minimal" checked>--}}
                                    {{--{{ Form::radio('r1',1,true,['class'=>'minimal']) }}--}}
                                {{--</label>--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="r1" class="minimal">--}}
                                    {{--{{ Form::radio('r1',1,null,['class'=>'minimal']) }}--}}
                                {{--</label>--}}
                            {{--</div>--}}
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

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">

@stop

@section('script')

    <!-- Select2 -->
    <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

    <!-- Page script -->
    <script>

    </script>

@stop