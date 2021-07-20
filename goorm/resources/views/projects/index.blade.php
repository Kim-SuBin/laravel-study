@extends('layout')

@section('content')
    <h1>project index</h1>
    @foreach($projects as $project)
        Title : {{ $project -> title }}
        Description : {{$project -> description}}
        <br />
    @endforeach
@endsection
