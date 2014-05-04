@section('page-title', trans('users/index.page-title'))

@section('styles')

@stop

@section('scripts')

@stop

@section('content')
<?php if(count($users)): ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th><!--Thumbnail--></th>
            <th>Info</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td width="1%">
                <img src="http://placehold.it/80" alt="Thumbnail" class="img-circle">
            </td>
            <td>
                <strong>{{$user->username}}</strong><br>
                Joined: {{$user->created_at}}
            </td>
            <td>
                Articles: 0
                <br>
                OTher Info
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>

<div class="alert alert-info">
    <h4><i class="glyphicon glyphicon-info-sign"></i> Information</h4>
    <p>
        There are currently no users to show. Please check back at a later time.
    </p>
</div>

<?php endif; ?>
@stop
