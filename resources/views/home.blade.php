@extends('layouts.web');

@section('content')
    <h1>HomePage</h1>
    <div class="container">
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card">
                        <div>
                            <strong>Title:</strong> {{ $movie->title }}
                        </div>
                        <div>
                            <strong>Original Title:</strong> {{ $movie->original_title }} 
                        </div>
                        <div>
                            <strong>Nationality:</strong> {{ $movie->nationality }}   
                        </div>
                        <div>
                            <strong>Date:</strong> {{ $movie->date }} 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
