@extends('layout.master')

@section('title', 'Car')

@section('content')

    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $car->title }}</h1>
            </div>
        </div>
        <div>
            <h2>{{ $car->producer }}</h2>
            <p>This car has {{$car->number_of_doors}} doors</p>
        </div>
    </main><!-- /.container -->

@endsection