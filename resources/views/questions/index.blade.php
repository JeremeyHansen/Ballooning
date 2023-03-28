@extends('layouts.app-master')

@section('content')
    <div class="profile">
        <h1>User Profile</h1>
        <h4>Username: {{ $user -> username}} </h4>
        <h4> Email: {{ $user -> email}} </h4>
        <div>
            <?php if ($user->age === 'Not Entered Yet'): ?>
                <div>
                    <form method="POST" action="{{ url('/update-user-age') }}">
                    @csrf 
                        <label for="age">Age: </label>
                        <input type="text" id="age" name="age" value="{{ $user->age }}" required>
                        <button type="submit">Update Age</button>
                    </form>
                </div>
            <?php else: ?>
                <h4>Age: <?php echo $user->age; ?></h4>
            <?php endif; ?>
            <?php if ($user->height === 'Not Entered Yet'): ?>
                <div>
                    <form method="POST" action="{{ url('/update-user-height') }}">
                    @csrf 
                        <label for="height">Height:</label>
                        <input type="text" id="height" name="height" value="{{ $user->height }}" required>
                        <button type="submit">Update Height</button>
                    </form>
                </div>
            <?php else: ?>
                <h4>Height: <?php echo $user->height; ?></h4>
            <?php endif; ?>
            <?php if ($user->address === 'Not Entered Yet'): ?>
                <div>
                    <form method="POST" action="{{ url('/update-user-address') }}">
                    @csrf 
                        <label for="text">Address:</label>
                        <input placeholder="Address" type="text" id="address" name="address" value="{{ $user->address }}" required>
                        <button type="submit">Update Address</button>
                    </form>
                </div>
            <?php else: ?>
                <h4>Address: <?php echo $user->address; ?></h4>
            <?php endif; ?>
        </div>
    </div>
@stop