@extends('layouts.fixed')

@section('title','AdminLTE 2 | Advance Form Elements')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Assign Permission  <b>{{$roles->name}}</b></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#"> Permission Assign</a></li>

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
            <div class="row">
                {{ Form::open(['url' =>['permission/assign/update',$roles->id],'id' => 'form']) }}
                    {{--<form action="{{url('permission/assign/update',$roles->id)}}" method="post">--}}

                    <div class="col-md-8 col-md-offset-2">
                        @foreach($permissions as $permission)
                            @foreach($currentpermissions as $currentpermission)
                                @if($currentpermission->permission_key == $permission->permission_key)
                                    @php
                                        $check = 'Checked';
                                    @endphp
                                    @php
                                        break;
                                    @endphp
                                @else
                                    @php
                                    $check = '';
                                    @endphp
                                @endif
                            @endforeach

                            <div class="col-md-4">


                                <input type="checkbox" id="{{$permission->name}}" name="asignpermission[]" value="{{$permission->id}}" @if(isset($check)){{$check}} @else @endif>&nbsp;&nbsp;
                                <label for="{{$permission->name}}">{{$permission->name}}</label>&nbsp;

                            </div>
                        @endforeach
                        <br><br><br><br>
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit"  class="btn btn-primary">Assign Permission</button>
                            </div>
                        </div>

                {{Form::close()}}
                    {{--</form>--}}
                </div>
            <br><br>
                <!-- /.col -->
            </div>
            <!-- /.box-body -->
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