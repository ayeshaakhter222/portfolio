@extends('layouts.app')
 cts
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tags CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tag.create') }}"> Create New Tag</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>slug</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tags as $tag)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tag->name }}</td>
            <td>{{ $tag->slug }}</td>
            <td>
                <form action="{{ route('tag.destroy',$tag->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('tag.show',$tag->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('tag.edit',$tag->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $tags->links() !!}

@endsection
