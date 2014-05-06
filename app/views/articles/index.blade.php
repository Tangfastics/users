@section('page-title', trans('articles/index.page-title'))

@section('styles')

@stop

@section('scripts')

@stop

@section('content')
<?php if(count($articles)): ?>
    <h4 class="page-title">
        Latest Articles
    </h4>
<?php else: ?>
<div class="alert alert-info">
    <h4><i class="glyphicon glyphicon-info-sign"></i> Information</h4>
    <p>
        {{trans('articles/index.error-no-articles')}}
    </p>
</div>
<?php endif; ?>
@stop
