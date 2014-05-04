<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @yield('page-title', 'Default Title') | LaraUsers.Com
        </title>
        <meta charset="UTF-8">
        <meta name=description content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('home')}}"><i class="glyphicon glyphicon-send"></i> LaraUsers.com</a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if(Auth::guest())
                            <li<?php if(Route::is('register')): ?> class="active"<?php endif; ?>><a href="{{route('register')}}"><i class="glyphicon glyphicon-edit"></i> Register</a></li>
                            <li<?php if(Route::is('login')): ?> class="active"<?php endif; ?>><a href="{{route('login')}}"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="user-dropdown"><i class="glyphicon glyphicon-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="user-dropdown">
                                    <li role="presentation"><a href="#"><i class="glyphicon glyphicon-eye-open"></i> Profile</a></li>
                                    <li role="presentation"><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="{{route('logout')}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>

        <section id="main-content" class="container">
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-ok"></i> Success!</h4>
                {{Session::get('message')}}
            </div>
            @endif
            @yield('content', 'Opps! No Content Found!')
        </section>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
