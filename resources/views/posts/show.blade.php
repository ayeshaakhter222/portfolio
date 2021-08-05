@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$post->title}}</h2>

                    
                    <div>
                        {{$post->slug}}
                    </div>
                     <div>
                        {{$post->description}}
                    </div>
                     <div>
                        {{$post->total_views}}
                    
                    </div>
                     <div>
                        {{$post->total_comments}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection