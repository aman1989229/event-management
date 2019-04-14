<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
</head>
<body>

<div class="jumbotron">
  <h1 class="display-4" >{{$post->title}}</h1>
 
  <p class="lead" >{!!$post->body!!}</p>
  <hr class="my-4">
  <p>{{$post->slug}}</p>
  
</div>

</body>
</html>