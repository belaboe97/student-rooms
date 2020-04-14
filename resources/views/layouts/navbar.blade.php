@extends('layouts.start')

@section('content')

<header>
    <div class="container-fluid bg-img-header mb-3">
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#offer">👌 What we offer</a>
                <a class="navbar-brand" href="#price">💰 Prices</a>
                <a class="navbar-brand" href="#aboutus">❤️ About us</a>
                <a class="navbar-brand" href="{{route('logout')}}">Logout</a>
            </nav>
        </div>
    </div>
</header>

@endsection('content')
