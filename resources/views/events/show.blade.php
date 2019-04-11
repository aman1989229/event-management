@extends('layouts.app')

@section('content')


<div class="jumbotron">
  <h1 class="display-4" style="text-decoration: underline;">{{$post->title}}</h1>
 
  <p class="lead" style="margin-top: 10px;">{!!$post->body!!}</p>
  <hr class="my-4">
  <p>{{$post->slug}}</p>
  @if($post->availability=="Yes")
  <a class="btn btn-success btn-lg" href="#" role="button">Available</a>
  <a class="btn btn-warning btn-lg" href="{{route('reques.store',$post->id)}}" style="margin-left: 20px;">Make Request</a>
  @else
  <a class="btn btn-danger btn-lg" href="#" role="button">Booked</a>
  @endif
</div>

@endsection
