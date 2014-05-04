@section('page-title', trans('users/create.page-title'))

@section('styles')

@stop

@section('scripts')

@stop

@section('content')
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        {{Form::open(['route' => 'users.store', 'role' => 'form'])}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    Register Account
                </div>
                <div class="panel-body">
                   <div class="form-group<?php if($errors->has('username')):?> has-error has-feedback<?php endif; ?>">
                        {{Form::label('username', 'Username', ['class' => 'control-label'])}}
                        {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required'])}}
                        <?php if($errors->has('username')): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block">{{$errors->first('username')}}</span>
                        <?php endif; ?>
                   </div>

                   <div class="form-group<?php if($errors->has('email')):?> has-error has-feedback<?php endif; ?>">
                       {{Form::label('email', 'Email', ['class' => 'control-label'])}}
                       {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address', 'required' => 'required'])}}
                       <?php if($errors->has('email')): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block">{{$errors->first('email')}}</span>
                        <?php endif; ?>
                   </div>

                   <div class="form-group<?php if($errors->has('password')):?> has-error has-feedback<?php endif; ?>">
                       {{Form::label('password', 'Password', ['class' => 'control-label'])}}
                       {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required'])}}
                       <?php if($errors->has('password')): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block">{{$errors->first('password')}}</span>
                        <?php endif; ?>
                   </div>

                   <div class="form-group<?php if($errors->has('password_confirmation')):?> has-error has-feedback<?php endif; ?>">
                       {{Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label'])}}
                       {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required'])}}
                       <?php if($errors->has('password_confirmation')): ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                        <?php endif; ?>
                   </div>
                </div>
                <div class="panel-footer text-right">
                    <a href="{{route('login')}}" class="btn btn-info">Login</a>
                    {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
                </div>
            </div>
        {{Form::close()}}
    </div>
</div>
@stop
