@extends('layouts.app')

@section('content')
    <div class="well">
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->body}}  
    </div>
@endsection