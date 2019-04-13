@extends('layouts.app')

@section('content')


<div class="jumbotron" style="margin: auto;width: 60%;border: 3px solid #73AD21;padding: 10px;"  >
  <h1 class="display-4" style="text-decoration: underline;">{{$post->title}}</h1>
  <img src="{{ filter_var($post->image, FILTER_VALIDATE_URL) ? $post->image :Voyager::image($post->image)}}" style ="width: 100%">
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
