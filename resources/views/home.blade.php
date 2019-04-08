@extends('layouts.app')

@section('content')

<div class="wrapper" >
    <!-- Sidebar -->
    <nav id="sidebar" style="background-color: #DAF7A6 ">
        <div class="sidebar-header"style="background-color: #FFC300;text-decoration: underline; ">
            <h3>User's View</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{ route('events') }}"   >Events</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

</div>

@endsection
