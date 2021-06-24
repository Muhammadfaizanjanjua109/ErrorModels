@extends('dashboard')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<br>
<a style="color:red" href="/createblog">Create a new Blog</a>
                    <a style="color:green" href="/showblogs">show existing blogs</a>
                    <br><br>
@foreach($blog as $blog)
<a style="color:Grey" >{{$blog->tittle}}</a>
<p class="p">{{$blog->body}}</p>
<form action={{route('restore.blog',$blog->id )}} method="get">
<button style="display:inline-grid" class="btn btn-primary inline" type="submit">Restore</button>
</form>
<form class="mt-5" action={{route('pdelete.blog',$blog->id )}} method="post">
<button style="display:inline-grid" class="btn btn-primary" type="submit">Permanently Delete</button>
@csrf
</form>
@endforeach
@endsection