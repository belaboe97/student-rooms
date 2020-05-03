@extends('layouts.start')

@section('content')

<header>
        <div class="container-fluid navbar-bg-image mb-3">
            <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="/home">👌 Home</a>
                <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        🏠  Rooms
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/rooms">Rooms</a>
                      <a class="dropdown-item" href="/rooms/create">Host Room</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      👨 Owners
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/owners">Owners</a>
                      <a class="dropdown-item" href="">Become Owner</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ⭐ Ratings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/roomratings">See all Ratings</a>
                      <a class="dropdown-item" href="/owners/create">Become Owner</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ⚙️User settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/users">See all users</a>
                      <a class="dropdown-item" href="/users/1000/edit">Edit User Profile</a>
                    </div>
                  </div>
                <a class="navbar-brand" href="{{route('logout')}}">🔌 Logout</a>
              
            </nav>
        </div>
        </div>
    </div>
</header>

@endsection('content')
