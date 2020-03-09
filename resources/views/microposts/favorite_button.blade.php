@if (Auth::user()->was_favorite($micropost->id))
    <div class="btn-group">
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
    </div>
@else
    <div class="btn-group">
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
    </div>
@endif
