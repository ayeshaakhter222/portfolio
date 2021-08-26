@extends('layouts.app')

@section('content')
    @includeIf('partials.into')
    @includeIf('partials.about')
    @includeIf('partials.resume')
    @includeIf('partials.portfolio')
    @includeIf('partials.services')
@endsection