@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Tweets
                        <button class="btn btn-primary">New Tweet</button>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($tweets as $tweet)
                            <p>{{ $tweet->text }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
