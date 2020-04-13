
@extends('layouts.navbar')

<a href="{{route('logout')}}">LOG ME OUT</a>

@foreach($owner as $data){
    <tr>
        <th>{{ $data -> id}}</th> <br>

    </tr>
}
    @endforeach