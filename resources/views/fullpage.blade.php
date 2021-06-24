
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('dashboard')

@section('content')
<button class="btn btn-primary"><a class="mb-5" href={{route('edit.blog' , $blog->id)}} >       Edit  </a></button>
<br><br>
<form method="post" action="{{route('delete.blog', $blog->id )}}">
{{method_field('delete')}}
@csrf
<button type="submit" class="btn btn-danger">Delete</button>
</form>
<h1>{{ $blog->tittle }}</h1>
<p>{{ $blog->body }}</p>
<h1>Reviews Or COmments</h1>
<h1>{{$blog->Reviews->comment }};
@if($blog->Review)
{{--
@forelse ( $blog->Review as $comments )
    <h1>{{$comments['comment'] }};
@empty
    <h1>No comment Till not</h1>
    @endempty
@endforelse --}}

@yield('comments');
<a style="color:green" href="/showblogs">Go Back to see All blogs</a>
@endsection
