@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
  <h1>Landing Page</h1>
  <p class="lead">This is the public landing page — visible to guests.</p>
  <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
  <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
</div>
@endsection