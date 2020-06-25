@extends('layouts.app')

@section('content')
    <h1>Homepage</h1>
    @guest 
        <p>Welcome guest!</p>
    @else
        <p>Welcome Authenticated person, your name is {{ Auth::user()->name }}!</p>
    @endguest
@endsection