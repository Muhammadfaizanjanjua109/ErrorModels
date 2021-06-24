@extends('fullpage');

@section('comments')
<form action="{{Route('comments.create')}}" method="post">
<label for="Comment">Comment</label>
<textarea name="comment" id="comment" cols="30" rows="10">Enter you Review</textarea>

</form>

@endsection
