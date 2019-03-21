@extends('layouts.fixed')

@section('title','AdminLTE 2 | General Form Elements')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        {{ Form::open(['action'=>'FormController@general','role'=>'form','method'=>'post','files'=>true]) }}
                        <div class="box-body">
                            <div class="form-group">
                                {{--<label for="exampleInputEmail1">Email address</label>--}}
                                {{ Form::label('exampleInputEmail1','Email address') }}
                                {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
                                {{ Form::text('exampleInputEmail1',null,['class'=>'form-control','placeholder'=>'Enter email']) }}
                            </div>
                            <div class="form-group">
                                {{--<label for="exampleInputPassword1">Password</label>--}}
                                {{ Form::label('exampleInputPassword1','Password') }}
                                {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
                                {{ Form::password('password',['class'=>'form-control','id'=>'exampleInputPassword1','placeholder'=>'Password']) }}
                            </div>
                            <div class="form-group">
                                {{--<label for="exampleInputFile">File input</label>--}}
                                {{ Form::label('exampleInputFile','File input') }}
                                {{--<input type="file" id="exampleInputFile">--}}
                                {{ Form::file('file',['id'=>'exampleInputFile']) }}

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    {{--<input type="checkbox">--}}
                                    {{ Form::checkbox('checkbox') }}
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                        </div>
                        {{ Form::close() }}
                </div>
                <!-- /.box -->

                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Different Height</h3>
                    </div>
                    <div class="box-body">
                        {{--<input class="form-control input-lg" type="text" placeholder=".input-lg">--}}
                        {{ Form::text('input-lg',null,['class'=>'form-control input-lg','placeholder'=>'.input-lg']) }}
                        <br>
                        {{--<input class="form-control" type="text" placeholder="Default input">--}}
                        {{ Form::text('default-input',null,['class'=>'form-control','placeholder'=>'Default input']) }}
                        <br>
                        {{--<input class="form-control input-sm" type="text" placeholder=".input-sm">--}}
                        {{ Form::text('input-sm',null,['class'=>'form-control input-sm','placeholder'=>'.input-sm']) }}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Different Width</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                {{--<input type="text" class="form-control" placeholder=".col-xs-3">--}}
                                {{ Form::text('col-xs-3',null,['class'=>'form-control','placeholder'=>'.col-xs-3']) }}
                            </div>
                            <div class="col-xs-4">
                                {{--<input type="text" class="form-control" placeholder=".col-xs-4">--}}
                                {{ Form::text('col-xs-4',null,['class'=>'form-control','placeholder'=>'.col-xs-4']) }}
                            </div>
                            <div class="col-xs-5">
                                {{--<input type="text" class="form-control" placeholder=".col-xs-5">--}}
                                {{ Form::text('col-xs-5',null,['class'=>'form-control','placeholder'=>'.col-xs-5']) }}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Input addon -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Input Addon</h3>
                    </div>
                    <div class="box-body">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            {{--<input type="text" class="form-control" placeholder="Username">--}}
                            {{ Form::text('username',null,['class'=>'form-control','placeholder'=>'Username']) }}
                        </div>
                        <br>

                        <div class="input-group">
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('addon-example',null,['class'=>'form-control']) }}
                            <span class="input-group-addon">.00</span>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('addon-example1',null,['class'=>'form-control']) }}
                            <span class="input-group-addon">.00</span>
                        </div>

                        <h4>With icons</h4>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                            {{--<input type="email" class="form-control" placeholder="Email">--}}
                            {{ Form::text('eamil',null,['class'=>'form-control','placeholder'=>'Email']) }}
                        </div>
                        <br>

                        <div class="input-group">
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('addon-example2',null,['class'=>'form-control']) }}
                            <span class="input-group-addon"><i class="fas fa-check"></i></span>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('addon-example3',null,['class'=>'form-control']) }}
                            <span class="input-group-addon"><i class="fas fa-ambulance"></i></span>
                        </div>

                        <h4>With checkbox and radio inputs</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                        <span class="input-group-addon">
                          {{--<input type="checkbox">--}}
                            {{ Form::checkbox('checkbox1') }}

                        </span>
                                    {{--<input type="text" class="form-control">--}}
                                    {{ Form::text('addon-example4',null,['class'=>'form-control']) }}
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                        <span class="input-group-addon">
                          {{--<input type="radio">--}}
                            {{ Form::radio('radio') }}
                        </span>
                                    {{--<input type="text" class="form-control">--}}
                                    {{ Form::text('addon-example6',null,['class'=>'form-control']) }}
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->

                        <h4>With buttons</h4>

                        <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                {{--<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action--}}
                                    {{--<span class="fas fa-caret-down"></span></button>--}}
                                {{ Form::button('Action<span class="fas fa-caret-down"></span>',['class'=>'btn btn-warning dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('group-btn-example',null,['class'=>'form-control']) }}
                        </div>
                        <!-- /input-group -->
                        <p class="margin">Normal</p>

                        <div class="input-group">
                            <div class="input-group-btn">
                                {{--<button type="button" class="btn btn-danger">Action</button>--}}
                                {{ Form::button('Action',['class'=>'btn btn-danger']) }}
                            </div>
                            <!-- /btn-group -->
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('group-btn-example1',null,['class'=>'form-control']) }}
                        </div>
                        <!-- /input-group -->
                        <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                        <div class="input-group input-group-sm">
                            {{--<input type="text" class="form-control">--}}
                            {{ Form::text('input-group-example',null,['class'=>'form-control']) }}
                            <span class="input-group-btn">
                      {{--<button type="button" class="btn btn-info btn-flat">Go!</button>--}}
                                {{ Form::button('Go!',['class'=>'btn btn-info btn-flat']) }}
                    </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{--<form class="form-horizontal">--}}
                        {{ Form::open(['class'=>'form-horizontal']) }}
                        <div class="box-body">
                            <div class="form-group">
                                {{--<label for="inputEmail3" class="col-sm-2 control-label">Email</label>--}}
                                {{ Form::label('inputEmail3','Email',['class'=>'col-sm-2 control-label']) }}

                                <div class="col-sm-10">
                                    {{--<input type="email" class="form-control" id="inputEmail3" placeholder="Email">--}}
                                    {{ Form::text('inputEmail3',null,['class'=>'form-control','id'=>'inputEmail3','placeholder'=>'Email']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>--}}
                                {{ Form::label('inputPassword3','Password',['class'=>'col-sm-2 control-label']) }}

                                <div class="col-sm-10">
                                    {{--<input type="password" class="form-control" id="inputPassword3" placeholder="Password">--}}
                                    {{ Form::password('inputPassword3',['class'=>'form-control','id'=>'inputPassword3','placeholder'=>'Passowrd']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            {{--<input type="checkbox">--}}
                                            {{ Form::checkbox('remember') }}
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-default">Cancel</button>--}}
                            {{ Form::submit('Cancel',['class'=>'btn btn-default']) }}
                            {{--<button type="submit" class="btn btn-info pull-right">Sign in</button>--}}
                            {{ Form::submit('Sign in',['class'=>'btn btn-info pull-right']) }}
                        </div>
                        <!-- /.box-footer -->
                    {{ Form::close() }}
                    {{--</form>--}}
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Elements</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{--<form role="form">--}}
                            {{ Form::open(['role'=>'form']) }}
                            <!-- text input -->
                            <div class="form-group">
                                {{--<label>Text</label>--}}
                                {{ Form::label('text','Text') }}
                                {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                                {{ Form::text('text',null,['class'=>'form-control','placeholder'=>'Enter ...']) }}
                            </div>
                            <div class="form-group">
                                {{--<label>Text Disabled</label>--}}
                                {{ Form::label('disabled','Text Disabled') }}
                                {{--<input type="text" class="form-control" placeholder="Enter ..." disabled>--}}
                                {{ Form::text('disabled',null,['class'=>'form-control','placeholder'=>'Enter ...','disabled']) }}
                            </div>

                            <!-- textarea -->
                            <div class="form-group">
                                {{--<label>Textarea</label>--}}
                                {{ Form::label('textarea','Texarea') }}
                                {{--<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>--}}
                                {{ Form::textarea('textarea',null,['class'=>'form-control','placeholder'=>'Enter ...','rows'=>3]) }}
                            </div>
                            <div class="form-group">
                                {{--<label>Textarea Disabled</label>--}}
                                {{ Form::label('textareaDisabled','Textarea Disabled') }}
                                {{--<textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>--}}
                                {{ Form::textarea('texareaDisabled',null,['class'=>'form-control','rows'=>3,'placeholder'=>'Enter ...','disabled']) }}
                            </div>

                            <!-- input states -->
                            <div class="form-group has-success">
                                {{--<label class="control-label" for="inputSuccess"><i class="fas fa-check"></i> Input with success</label>--}}
                                {!! html_entity_decode(Form::label('inputSuccess','<i class="fas fa-check"></i> Input with success',['class'=>'control-label'])) !!}
                                {{--<input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">--}}
                                {{ Form::text('inputSuccess',null,['class'=>'form-control','id'=>'inputSuccess','placeholder'=>'Enter ...']) }}
                                <span class="help-block">Help block with success</span>
                            </div>
                            <div class="form-group has-warning">
                                {{--<label class="control-label" for="inputWarning"><i class="far fa-bell"></i> Input with warning</label>--}}
                                {!! html_entity_decode(Form::label('inputWarning','<i class="far fa-bell"></i> Input with warning',['class'=>'control-label'])) !!}
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">--}}
                                {{ Form::text('inputWarning',null,['class'=>'form-control','id'=>'inputWarning','placeholder'=>'Enter ...']) }}
                                <span class="help-block">Help block with warning</span>
                            </div>
                            <div class="form-group has-error">
                                {{--<label class="control-label" for="inputError"><i class="far fa-times-circle"></i> Input with error</label>--}}
                                {!! html_entity_decode(Form::label('inputError','<i class="far fa-times-circle"></i> Input with error',['class'=>'control-label'])) !!}
                                {{--<input type="text" class="form-control" id="inputError" placeholder="Enter ...">--}}
                                {{ Form::text('inputError',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'Enter ...']) }}
                                <span class="help-block">Help block with error</span>
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        {{--<input type="checkbox">--}}
                                        {{ Form::checkbox('checkbox1') }}
                                        Checkbox 1
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        {{--<input type="checkbox">--}}
                                        {{ Form::checkbox('checkbox2') }}
                                        Checkbox 2
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        {{--<input type="checkbox" disabled>--}}
                                        {{ Form::checkbox('checkbox3',1,null,['disabled']) }}
                                        Checkbox disabled
                                    </label>
                                </div>
                            </div>

                            <!-- radio -->
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>--}}
                                        {{ Form::radio('optionsRadios','option1',true,['id'=>'optionRadios1']) }}
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">--}}
                                        {{ Form::radio('optionsRadios','option2',null,['id'=>'optionsRadios2']) }}
                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>--}}
                                        {{ Form::radio('optionsRadios','option3',null,['id'=>'optionsRadios3','disabled']) }}
                                        Option three is disabled
                                    </label>
                                </div>
                            </div>

                            <!-- select -->
                            <div class="form-group">
                                {{--<label>Select</label>--}}
                                {{ Form::label('Select') }}
                                {{ Form::select('select',$repository->options(),null,['class'=>'form-control']) }}
                                {{--<select class="form-control">--}}
                                    {{--<option>option 1</option>--}}
                                    {{--<option>option 2</option>--}}
                                    {{--<option>option 3</option>--}}
                                    {{--<option>option 4</option>--}}
                                    {{--<option>option 5</option>--}}
                                {{--</select>--}}
                            </div>
                            <div class="form-group">
                                {{--<label>Select Disabled</label>--}}
                                {{ Form::label('Select Disabled') }}
                                {{ Form::select('select2',$repository->options(),null,['class'=>'form-control','disabled']) }}
                                {{--<select class="form-control" disabled>--}}
                                    {{--<option>option 1</option>--}}
                                    {{--<option>option 2</option>--}}
                                    {{--<option>option 3</option>--}}
                                    {{--<option>option 4</option>--}}
                                    {{--<option>option 5</option>--}}
                                {{--</select>--}}
                            </div>

                            <!-- Select multiple-->
                            <div class="form-group">
                                {{--<label>Select Multiple</label>--}}
                                {{ Form::label('Select Multiple') }}
                                {{ Form::select('selectMultiple',$repository->options(),null,['class'=>'form-control','multiple']) }}
                                {{--<select multiple class="form-control">--}}
                                    {{--<option>option 1</option>--}}
                                    {{--<option>option 2</option>--}}
                                    {{--<option>option 3</option>--}}
                                    {{--<option>option 4</option>--}}
                                    {{--<option>option 5</option>--}}
                                {{--</select>--}}
                            </div>
                            <div class="form-group">
                                {{--<label>Select Multiple Disabled</label>--}}
                                {{ Form::label('Select Multiple Disabled') }}
                                {{ Form::select('selectMultipleDisabled',$repository->options(),null,['class'=>'form-control','disabled','multiple']) }}
                                {{--<select multiple class="form-control" disabled>--}}
                                    {{--<option>option 1</option>--}}
                                    {{--<option>option 2</option>--}}
                                    {{--<option>option 3</option>--}}
                                    {{--<option>option 4</option>--}}
                                    {{--<option>option 5</option>--}}
                                {{--</select>--}}
                            </div>

                            {{ Form::close() }}
                        {{--</form>--}}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@stop