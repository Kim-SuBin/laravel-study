@extends('layout')

@section('title')
    book list
@endsection

@section('content')
    <?php
    var_dump($books);
    ?>
    <ul>
        @foreach ($books as $book)
        <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection
