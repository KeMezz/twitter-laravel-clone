@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        New Tweet
                        <button class="btn btn-primary">Post</button>
                    </div>

                    <div class="card-body">
                        <textarea class="form-control" placeholder="What is going on?" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
