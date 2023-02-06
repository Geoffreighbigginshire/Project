@extends('layouts.app')
@section('title', 'Postingan')

@section('content')
    {{ $posts['title'] }}
    <br/>
    {{ $posts['content'] }}
@endsection
