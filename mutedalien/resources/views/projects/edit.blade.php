@extends('layout')

@section('content')
    <h1>Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div>
        <input type="text" name="title" value="{{ $project->title }}">
        </div>
        <div>
        <textarea name="description" >{{ $project->description }}</textarea>
        </div>
        <div>
        <button type="submit" name="button">Update</button>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit" name="button">Delete</button>
        </div>
    </form>
@endsection
