


<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{ route('post.create') }}" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Total_views</th>
                            <th>Total_comments</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{$post->slug  }}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->total_views  }}</td>
                            <td>{{$post->total_comments }}</td>
                            
                            <td>
                            <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('post.destroy',$post->id) }}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
