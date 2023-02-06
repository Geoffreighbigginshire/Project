{{--Menggunakan template (HTML) dari file app.blade.php di folder layout--}}
@extends('layouts.app')
@section('title', 'All blog posts')

@forelse($posts as $key => $post)
    {{ $key }} . {{ $post['title'] }} <br/><br/>
    {{ $post['content'] }}<br><br>

    <br/>

@empty
    <p>Nothing to see here folks !</p>

@endforelse

