@extends('layouts.fixed')

@section('title','AdminLTE 2 | Data Tables')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Role</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th class="text-center">Assign Permission</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($roles as $role)
                                <tr>
                                    <th> {{$i++}}</th>
                                    <td> {{$role->name}}</td>
                                    <td class="text-center">
                                        <a href="{{url('permission-assign',$role->id)}}" class="btn btn-info btn-sm"></i> Assign Permission</a>
                                    </td>
                                    <td class="text-center">
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                {{--<a href="{{ action('RoleController@edit',$role->id) }}"><i class="fa text-success fa-pencil"></i></a>--}}
                                                <a href="{{url('role-edit',$role->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            </div>
                                            <div class="col-md-2">
                                                {{ Form::open(['url'=>['role-delete',$role->id],'method'=>'post']) }}
                                                    {{--<input type="hidden" name="_method" value="post">--}}

                                                    <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> Delete</button>
                                                {{Form::close()}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@stop

@section('script')


    <script>

    </script>
@stop