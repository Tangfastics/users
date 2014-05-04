@section('page-title', trans('sessions/create.page-title'))

@section('styles')

@stop

@section('scripts')

@stop

@section('content')
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        {{Form::open(['route' => 'sessions.store'])}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    Login
                </div>
                <div class="panel-body">
                   <div class="form-group">
                       {{Form::label('username', 'Username')}}
                       {{Form::text('username', null, ['class' => 'form-control input-lg', 'placeholder' => 'Username'])}}
                   </div>
                   <div class="form-group">
                       {{Form::label('password', 'Password')}}
                       {{Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => 'Password'])}}
                   </div>
                   <div class="checkbox">
                       <label>
                           {{Form::checkbox('remember_me', null, true)}} Remember Me?
                       </label>
                   </div>
                </div>
                <div class="panel-footer text-right">
                    <a href="{{route('register')}}" class="btn btn-info">Register</a>
                    {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
                </div>
            </div>
        {{Form::close()}}
    </div>
</div>
@stop
