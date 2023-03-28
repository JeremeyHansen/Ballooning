@extends('layouts.auth-master')

@section('content')

<div class="login-form">
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />        
        <h1 class="hi">Login</h1>

        @include('layouts.partials.messages')

        <div>
            <input class="input" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span>{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div>
            <input class="input" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span>{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
</div>
@stop