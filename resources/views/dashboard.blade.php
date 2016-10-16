@extends('layouts.master')

@section('title')
    Welcome
@endsection
@section('content')
    <h2>Welcome {{ Auth::user()->name }}</h2>

    <form method="get" action="{{ route('logout') }}">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <input type="submit" value="Logout" class="btn btn-danger">
    </form>

@endsection