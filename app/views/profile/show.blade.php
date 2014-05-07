@section('page-title', 'Profile: Username')

@section('styles')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@stop

@section('scripts')

@stop

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="profile-top clearfix">
            <div class="profile-bar">
                <div class="avatar pull-left">
                    <a href="">
                        <img src="http://lorempixel.com/150/150/people" alt="">
                    </a>
                </div>
            </div>
            <div class="profile-top-stats">
                <div class="profile-stats pull-right">
                    <div class="btn-group">
                        <span class="btn btn-default"><i class="glyphicon glyphicon-star"></i> <strong>123</strong> Points</span>
                        <span class="btn btn-default"><i class="glyphicon glyphicon-user"></i> <strong>456</strong> Followers</span>
                    </div>
                </div>
                <div class="profile-nag">
                    <?php if(Auth::check() && Auth::getUser()->id == $user->id): ?>
                    <div class="profile-btns pull-right">
                        <a href="{{route('profile.edit', $user->username)}}" class="btn btn-primary">Edit Profile</a>
                    </div>
                    <?php endif; ?>
                    <h3 class="profile-username">{{$user->username}}</h3>
                    <span class="profile-joined text-muted">
                        Joined <strong>{{$user->joinDate}}</strong>
                    </span>
                </div>
            </div>
        </div><!--/.profile-top-->
        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-user"></i> About Me
            </div>
            <div class="panel-body">
                {{$user->about_me}}
            </div>
        </div>
    </div>
    <!--/.col-lg-8-->
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-info-sign"></i> Information
            </div>
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{$user->fullName}}</li>
                <li class="list-group-item"><strong>DOB:</strong> {{$user->dob}} (Age: {{$user->age}})</li>
                <li class="list-group-item"><strong>Gender:</strong> {{$user->gender}}</li>
                <li class="list-group-item"><strong>Skype:</strong> {{$user->skype}}</li>
                <li class="list-group-item"><strong>AIM:</strong> {{$user->aim}}</li>
                <li class="list-group-item"><strong>MSN:</strong> {{$user->msn}}</li>
                <li class="list-group-item"><strong>Website:</strong> {{$user->web}}</li>
                <li class="list-group-item"><strong>ICQ:</strong> {{$user->icq}}</li>
                <li class="list-group-item"><strong>Yahoo:</strong> {{$user->yahoo}}</li>
                <li class="list-group-item"><strong>Jabber:</strong> {{$user->jabber}}</li>
                <li class="list-group-item"><strong>Facebook:</strong> {{$user->facebook}}</li>
                <li class="list-group-item"><strong>Twitter:</strong> {{$user->twitter}}</li>
            </ul>
        </div>
    </div>
</div>
@stop
