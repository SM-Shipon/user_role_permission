@extends('layouts.fixed')

@section('title','AdminLTE 2 | Data Tables')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>User</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">User</a></li>

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
                                    <th>User Name</th>
                                    <th>Email</th>
                                    {{--<th>Password</th>--}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($users as $user)
                                <tr>
                                    <th> {{$i++}}</th>
                                    <td> {{$user->name}}</td>
                                    <td> {{$user->username}}</td>
                                    <td> {{$user->email}}</td>
                                    {{--<td> {{$user->password}}</td>--}}
                                    <td>
                                        <div class="row">
                                            <div class="col-md-3">

                                                <a href="{{url('user-edit',$user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            </div>
                                            <div class="col-md-2">
                                                    {{ Form::open(['url'=>['user-delete',$user->id],'method'=>'post']) }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                    {{ csrf_field()}}
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

    <!-- DataTables -->
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop