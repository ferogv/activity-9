@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1>Dashboard</h1>
  <p>Welcome, {{ Auth::user()->name }} — this area is for authenticated users only.</p>
</div>
@endsection