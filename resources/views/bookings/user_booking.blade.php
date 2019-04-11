@extends('layouts.app')

@section('content')
<div class="row">
  @include('partials.sidebar')
		<div class="col-md-8">
			
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
                @foreach($bookings as $booking)
                   <tr>
                    <td>@php echo($i++); @endphp </td>
                   	<td>{{ $booking->title }}</td>
                   	<td>{{ substr( strip_tags($booking->body) , 0 ,50 ) }} {{strlen(strip_tags($booking->body))>50 ?"...." :"" }}</td>
                   	<td>{{ date('M j, Y',strtotime($booking->created_at)) }}</td>
                   	<td><a href="{{route('events.show',$booking->id)}}" class="btn btn-success btn-sm">View</a></td>
                   </tr>
                   
                  @endforeach
              </tbody>
            </table>
            
            <!--pagination links starts here-->
           
		</div>
     </div>
     @endsection
