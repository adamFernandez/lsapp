@extends('layouts.app')
 
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel app from scratch course.</p>
        <p><a href="/login" role="button" class="btn btn-primary btn-lg">Login</a><a href="/register" role="button" class="btn btn-success btn-lg">Register</a></p>
    </div>    
@endsection


