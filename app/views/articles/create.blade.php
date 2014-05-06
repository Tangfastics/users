@section('page-title', trans('articles/create.page-title'))

@section('styles')

@stop

@section('scripts')

@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
            Create Article
        </h3>
        {{Form::open(['route' => 'articles.store', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal'])}}
        
        <div class="form-group<?php if($errors->has('title')): ?> has-error has-feedback<?php endif; ?>">
            {{Form::label('title', 'Title', ['class' => 'col-lg-2 control-label'])}}
            <div class="col-lg-10">
                {{Form::text('title', null, ['class' => 'form-control'])}}
                <?php if($errors->has('title')): ?>
                <span class="help-block">{{$errors->first('title')}}</span>
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php if($errors->has('snippet')): ?> has-error has-feedback<?php endif; ?>">
            {{Form::label('snippet', 'Snippet', ['class' => 'col-lg-2 control-label'])}}
            <div class="col-lg-10">
                {{Form::textarea('snippet', null, ['class' => 'form-control'])}}
                <?php if($errors->has('snippet')): ?>
                <span class="help-block">{{$errors->first('snippet')}}</span>
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php if($errors->has('post')): ?> has-error has-feedback<?php endif; ?>">
            {{Form::label('post', 'Post', ['class' => 'col-lg-2 control-label'])}}
            <div class="col-lg-10">
                {{Form::textarea('post', null, ['class' => 'form-control'])}}
                <?php if($errors->has('post')): ?>
                <span class="help-block">{{$errors->first('post')}}</span>
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                {{Form::submit('Create Article', ['class' => 'btn btn-primary'])}}
            </div>
        </div>

        {{Form::close()}}
    </div>
</div>
@stop
