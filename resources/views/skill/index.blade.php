@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('List of Skills') }}
                    </div>

                    <div class="card-body">
                        <div class="accordion" id="accordion">
                            @foreach($users as $user)
                            <div class="card">
                                <div class="card-header" id="heading-{{ $user->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{ $user->id }}" aria-expanded="false" aria-controls="collapse-{{ $user->id }}">
                                            Skill's of <b>{{ $user->name }}</b>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse-{{ $user->id }}" class="collapse" aria-labelledby="heading-{{ $user->id }}" data-parent="#accordion">
                                    <div class="card-body">
                                        @if(count($user->skills) > 0)
                                            <table class="table table-bordered table-sm">
                                                <thead>
                                                <th>Skill Name</th>
                                                <th>Skill Percentage</th>
                                                <th>
                                                    Actions
                                                </th>
                                                </thead>
                                                <tbody>
                                                @foreach($user->skills as $skill)
                                                    <tr>
                                                        <td>{{ $skill->name }}</td>
                                                        <td>{{ $skill->percentage }}</td>
                                                        <td>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <form action="{{ route('skill.destroy', $skill->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <div class="alert alert-info" role="alert">
                                                No skills has been found for this user.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
