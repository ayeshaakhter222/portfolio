@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/post/{{$post->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="">Post slug</label>
                            <input type="text" name="slug" class="form-control" value="{{$post->slug}}" >
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control" value="{{$post->description}}" >
                        </div>
                        <div class="form-group">
                            <label for="">Total_views</label>
                            <input type="text" name="total_views" class="form-control" value="{{$post->total_post}}">
                        </div>
                        <div class="form-group">
                            <label for="">Total_comments</label>
                            <input type="text" name="total_comments" class="form-control" value="{{$post->total_comments}}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection