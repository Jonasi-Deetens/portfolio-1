@extends('layout.layout')

@section('title')
    {{ env('APP_NAME') . ' - Login' }}
@endsection

@section('content')
<section>
    <div class="flex-container">
        <div class="wrapper">
            <h2>Login</h2>
            <hr>
            <form action="{{ route('userLogin') }}" method="POST">
                @csrf
                <label for="loginUsername">Username:</label><br>
                <input type="text" name="loginUsername" id="loginUsername" value="{{ old('loginUsername') }}" required><br>
                @if($errors->has('loginUsername'))
                <p class="error">{{ $errors->first('loginUsername') }}</p>
                @endif
                <label for="loginPassword">Password:</label><br>
                <input type="password" name="loginPassword" id="loginPassword" required><br>
                @if($errors->has('loginPassword'))
                <p class="error">{{ $errors->first('loginPassword') }}</p>
                @endif
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="wrapper">
            <h2>Register</h2>
            <hr>
            <form action="{{ route('userRegister') }}" method="POST">
                @csrf
                <label for="registerUsername">Username:</label><br>
                <input type="text" name="registerUsername" id="registerUsername" value="{{ old('registerUsername') }}" required><br>
                @if($errors->has('registerUsername'))
                <p class="error">{{ $errors->first('registerUsername') }}</p>
                @endif
                <label for="registerEmail">Email:</label><br>
                <input type="email" name="registerEmail" id="registerEmail" value="{{ old('registerEmail') }}" required><br>
                @if($errors->has('registerEmail'))
                <p class="error">{{ $errors->first('registerEmail') }}</p>
                @endif
                <label for="registerPassword">Password:</label><br>
                <input type="password" name="registerPassword" id="registerPassword" required><br>
                @if($errors->has('registerPassword'))
                <p class="error">{{ $errors->first('registerPassword') }}</p>
                @endif
                <label for="registerPassword_confirmation">Confirm Password:</label><br>
                <input type="password" name="registerPassword_confirmation" id="registerPassword_confirmation" required><br>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</section>
@endsection