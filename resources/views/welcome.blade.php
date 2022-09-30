@extends('layout.master')

@section('title', 'Cars')

@section('content')

    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Welcome, {{ $name }}</h1>
            </div>
        </div>
        <div>
            <h3>I'm {{ $age }} years old.</h3>
        </div>
    </main><!-- /.container -->

@endsection
