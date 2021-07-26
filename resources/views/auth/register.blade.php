@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="/register">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        @include('partials.error-message', ['field' => 'name'])
    </div>
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
    <div class="form-group">
        <label for="confirm-password">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm password">
        @include('partials.error-message', ['field' => 'password_confirmation'])
    </div>

    <div class="form-check">
        <input type="checkbox" name="agreed" class="form-check-input" id="agreed" value="1">
        <label class="form-check-label" for="agreed">I agree to terms and conditions.</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection