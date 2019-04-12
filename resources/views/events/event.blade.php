@extends('layouts.app')

@section('content')
<div class="row">
  @include('partials.sidebar')
		<div class="col-md-10">
	       	<div class="row" style="margin-left: 10px;">
          Filter:
          <a href="events/?availability=Yes">Available</a>
          <a href="#">|</a>
          <a href="{{route('events')}}">Reset</a> 

          <form method="POST" action="{{URL::to('/submit')}}" style="margin-left:20px;">
          Date:
            <input type="text" id="datetimepicker" name="from">
            to
            <input type="text" id="datetimepicker" name="to">
            <button type="submit">Submit</button>
          </form> 
          </div>
          
			     <table class="table">
              <thead>
                <tr>
                  <th scope="col">S.n.</th>
                  <th scope="col">Title</th>
                  <th scope="col">Body</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($posts as $post)
                   <tr>
                    <td>@php echo($i++); @endphp </td>
                   	<td>{{ $post->title }}</td>
                   	<td>{{ substr( strip_tags($post->body) , 0 ,50 ) }} {{strlen(strip_tags($post->body))>50 ?"...." :"" }}</td>
                   	<td>{{ date('M j, Y',strtotime($post->created_at)) }}</td>
                   	<td><a href="{{route('events.show',$post->id)}}" class="btn btn-success btn-sm">View</a></td>
                   </tr>
                   
                  @endforeach
              </tbody>
            </table>
            
            <!--pagination links starts here-->
           <div class="text-center" style="margin-left: 45%;">
              {!! $posts->links();!!}
            </div>
		</div>
     </div>

     @endsection