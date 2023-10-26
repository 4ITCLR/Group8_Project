@extends('layouts.app')

@section('title', 'Registration')

@section('content')
<link rel="stylesheet" href="{{ asset('css/Register.css') }}">

<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="FullName" value="{{ old('FullName') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your address" name="Address" value="{{ old('Address') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="Email" value="{{ old('Email') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" name="Number" value="{{ old('Number') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Instagram Handle</span>
                    <input type="text" placeholder="Enter your Handle" name="Instagram_Handle" value="{{ old('Instagram_Handle') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your password" name="retypePassword" required>
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
@endsection
