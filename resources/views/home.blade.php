@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body d-flex flex-column">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <form method="GET" action={{ route('tweet.index') }}>
                            <button class="btn btn-primary">Go To Tweets</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
