@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form method="POST" action="/login">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        @include('partials.error-message', ['field' => 'email'])
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        @include('partials.error-message', ['field' => 'password'])
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection