@extends('layouts.start')

@section('content')

<header>
        <div class="container-fluid navbar-bg-image mb-3">
            <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="/home">👌 Rooms</a>
                <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        🏠  Rooms
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/rooms">Rooms</a>
                      <a class="dropdown-item" href="/rooms/create">Host Room</a>
                    </div>
                  </div>
                <a class="navbar-brand" href="#">❤️ About us</a>
                <a class="navbar-brand" href="{{route('logout')}}">🔌 Logout</a>
                <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        🏠  Rooms
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/rooms">Rooms</a>
                      <a class="dropdown-item" href="/rooms/create">Host Room</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
            </nav>
        </div>
        </div>
    </div>
</header>

@endsection('content')
