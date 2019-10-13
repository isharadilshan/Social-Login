@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-body">
                    <a class="btn btn-link" href="{{ route('enroll') }}">
                        {{ __('Enroll') }}
                    </a>
                </div>

                <!-- <div class="card-body">
                    <div class="fb-page" data-href="https://www.facebook.com/Back-End-Developer-325579044730857/" data-tabs="timeline" data-width="400" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Back-End-Developer-325579044730857/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Back-End-Developer-325579044730857/">Back-End Developer</a>
                        </blockquote>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
