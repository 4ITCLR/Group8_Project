@extends('layouts.app')

@section('title', 'Login')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script src="https://kit.fontawesome.com/7b03628471.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<div class="center">
    <h1>LOGIN</h1>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="txt_field">
            <input type="text" name="Email" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" name="Password" required>
            <span></span>
            <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
            Not a member? <a class="btn2 btn-primary" href="{{ route('camera.Register') }}">Signup</a>
        </div>
        <h1>{{ $MyString }}</h1>
    </form>
</div>
@endsection
