@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>{{ __('You are logged in!') }}</div>

                    <!-- Add a div here for the Blog button -->

                    <!-- Add a margin to the top of the div -->

                    <div style="margin-top: 20px;">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">{{ __('BLOG') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection