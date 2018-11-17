@extends('layouts.master')


@section('content')
    <h1>About</h1>
    <p>
        @include('modules.description')
    </p>

    <p>
        The source code for this project can be viewed here:
        <a href='https://github.com/jpersson74/foobooks'>https://github.com/jpersson74/foobooks</a></p>
    </p>
@endsection