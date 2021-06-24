@extends('dashboard')
@section('content')
<br>
<a style="color:red" href="/createblog">Create a new Blog</a>
                    <a style="color:green" href="/showblogs">show existing blogs</a>
                    <br><br>
@foreach($blogs as $blogs)
<a style="color:Grey" href={{route('send.blog',$blogs->id)}}>{{$blogs->tittle}}</a>
<p class="p">{{$blogs->body}}</p>
@endforeach
@endsection
