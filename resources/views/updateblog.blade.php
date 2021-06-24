<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12"><div>
<div class="col-lg-12 col-md-12 col-sm-12">
<form action={{route('updatenew.blog',$blogs->id)}}  method="post">
{{ method_field('patch')}}
<label for="tittle" ></label>
<input type="text" class="form-control" name="tittle" value="{{$blogs->tittle}}" id="tittle" >
<div class="form-group">
<label for="body" ></label>
<input type="text" class="form-control" rows="5" value="{{$blogs->body}}" name="body" id="body">
<!-- <input type="text" class="form-control" rows="5" value="{{$blogs->body}}" name="body" id="comment"></textarea> -->
</div>
{{csrf_field()}}
<button type="submit">submit</button>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-12"><div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>