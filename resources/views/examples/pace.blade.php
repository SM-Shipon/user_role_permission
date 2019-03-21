@extends('layouts.fixed')

@section('title','AdminLTE 2 | Pace Page')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pace page
            <small>Loading example</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Pace page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                Pace loading works automatically on page. You can still implement it with ajax requests by adding this js:
                <br/><code>$(document).ajaxStart(function() { Pace.restart(); });</code>
                <br/>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
                            <i class="fas fa-spin fa-sync-alt"></i>&nbsp; Get External Content
                        </button>
                    </div>
                </div>
                <div class="ajax-content">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

@stop

@section('style')
    <!-- Pace style -->
    <link rel="stylesheet" href="{{ asset('plugins/pace/pace.min.css') }}">
@stop

@section('script')
    <!-- page script -->
    <script type="text/javascript">
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function () {
            Pace.restart()
        });
        $('.ajax').click(function () {
            $.ajax({
                url: '#', success: function (result) {
                    $('.ajax-content').html('<hr>Ajax Request Completed !')
                }
            })
        })
    </script>
@stop