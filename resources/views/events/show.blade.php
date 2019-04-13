@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1 class="display-4" style="text-decoration: underline;">{{$post->title}}</h1>
 
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
