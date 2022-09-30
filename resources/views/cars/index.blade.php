@extends('layout.master')

@section('title', 'Cars')

@section('content')

    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">List of cars</h1>
            </div>
        </div>          
        <ul>
            @foreach ($cars as $car )
                <h2>
                    <a href="{{ route('single-car', ['id' => $car->id ]) }}">
                        <li>{{ $car->producer }}</li>
                    </a>
                </h2>
            @endforeach
        </ul>
    </main><!-- /.container -->

@endsection
