<!-- resources/views/login.blade.php -->

@extends('layouts.app')

@section('title', 'Form Login')

@section('content')
    <h1>Form Login</h1>
    <form id="loginForm" enctype="multipart/form-data" action="{{ route('process.login') }}" method="post">
        @csrf <!-- Add CSRF token for security -->
        
        <label for="username">Nama:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="profilePicture">Foto Profil:</label>
        <input type="file" id="profilePicture" name="profilePicture" accept="image/*"><br>

        <button type="submit">Login</button>
    </form>
@endsection
