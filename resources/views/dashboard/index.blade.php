@extends('dashboard.layouts.main')

@section('container')
    <h2 class="mb-4">Welcome back, {{ auth()->user()->name }}</h2>
@endsection
