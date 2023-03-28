@extends('layouts.app-master')

@section('content')
    <div>
        @auth
        <div class="logged-in-home">
            <h1>Dashboard</h1>
            <p>Welcome In {{ $user -> username }}!</p>
            <a href="/user-profile" role="button">User Profile</a>
        </div>
        @endauth

        @guest
        <div class="home-container">
            <h1 class="home-title">Welcome To Ballooning Nest Eggs</h1>
            <h3>Take the <span class="funny">funny</span> out of <span class="money">money</span>!</h3>
        </div>
        @endguest
    </div>
@stop