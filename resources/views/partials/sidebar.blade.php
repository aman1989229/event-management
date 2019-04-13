<html><head>
    <style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>
<div class="col-md-2">

<div class="wrapper" >
    <!-- Sidebar -->
    <nav id="sidebar" style="background-color: darkblue;width:10%;">
        <div class="sidebar-header"style="background-color: black; color: white;text-decoration: underline;">
            <span class="col-md-5" style="margin-left: 25px; text-align: center;"><img src="/img/sea.jpg" alt="User's Profile" style="width:50%; border-radius: 50px;"></span>
            <span class="col-md-7" style="margin-left: 18px; text-align: center;"><h4>User's View</h4></span>
            
        </div>
        <div class="col-md-12">
        <ul class="list-unstyled components">
            <li class="{{ Request::is('events')? "active" :"" }}">
                <a href="{{ route('events') }}" >Events</a>
            </li>
           <hr style="background-color: black;" />
            <li class="{{ Request::is('bookings')? "active" :"" }}">
                <a href="{{route('bookings.show',$user->id)}}">Your Booking</a>
                
            </li>
            <hr style="background-color: black;" />
        </ul></div>
    </nav>

</div>
  </div>
  </body>
  </html>