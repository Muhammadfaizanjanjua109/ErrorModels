
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('dashboard')

@section('content')

<h1 class="h1"> <br> {{ $blog->tittle }}</h1>
<br>
<p>{{ $blog->body }}</p>
<div>
    <br>
    <div class="h2">Latest reviews</div>
@forelse ($blog->review as $rev)
 <div class="border">   <h1 class="h5" style="color: red">{{$rev['comment']}}</h1> </div>
    <br>
@empty
    <h1>No comment Till now</h1>

@endforelse



</div>
<br><br>
<div>
{{-- @include('commentsform') --}}
<div>
    <form action="{{Route('comments.Store',$blog->id)}}" method="post">
    <label for="Comment">Comment</label>
    <br>
    <textarea name="comment" id="comment" cols="100" rows="10">Enter you Review</textarea>
    <br>
    <button class="btn-primary mt-5" type="submit">Submit Review</button>
    @csrf
    </form>
    </div>
</div>
<br>
<button class="btn btn-primary inline-block" style=""><a class="mb-5" href={{route('edit.blog' , $blog->id)}} >       Edit  </a></button>
<div class="inline-block">
<form method="post" action="{{route('delete.blog', $blog->id )}}">
    {{method_field('delete')}}
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<br>
<a style="color:green" href="/showblogs">Go Back to see All blogs</a>

<br><br>

@endsection
