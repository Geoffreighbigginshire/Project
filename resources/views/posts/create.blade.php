@extends('layouts.app')
@section('Title', 'Add new post')

@section('content')
    <form action="" method="post">
        <div>
            <input type="text" name="title" placeholder="Fill the blanks" value="">
        </div>
        <div>
            <textarea name="content" placeholder="Post the content">
            </textarea>
        </div>
        <div>
            <input type="submit" value="Create" name="submit">
        </div>

    </form>
@endsection
