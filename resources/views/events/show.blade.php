@extends('layouts.app')

@section('content')


<div class="jumbotron" style="margin: auto;width: 60%;border: 3px solid #73AD21;padding: 10px;"  >
  <h2 class="display-4" style="display: inline;margin-left: 25%">{{$post->title}}</h2><br><br>
  <img src="{{ filter_var($post->image, FILTER_VALIDATE_URL) ? $post->image :Voyager::image($post->image)}}" style =" display: block;margin-left: auto;margin-right: auto; max-width: 100%;
  height: 500px;"><br>
  <h2>Description : </h2>
  <p class="lead" style="margin-top: 10px;">{!!$post->body!!}</p>
  <hr class="my-4">
  <p>{{$post->slug}}</p>
  @if($post->availability=="Yes")
  <div style="width:70%; border:2; font-weight:bolder; font-size: 20px;" class="alert alert-success">Available</div>
  <a class="btn btn-warning btn-lg" href="{{route('reques.store',$post->id)}}" style="margin-left: 5px;">Make Request</a>
  @else
  <div style="width:70%; border:2; font-weight:bolder; font-size: 20px;"  class="alert alert-danger">Booked</div>
  <a href="{{route('events.edit',$post->id)}}" class="btn-danger btn-lg">Convert into Pdf</a>
  @endif
</div>

@endsection
