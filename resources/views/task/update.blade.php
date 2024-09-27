@extends('layouts.layout')

@section('content')
    <h1>Update Task</h1>
    <form action="{{ route('task.assistant_update', $task->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title: </label>
            <input type="text" class="form-control" id="titleId" name="title" value="{{ old('title', $task->title) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="descriptionId" name="description" value="{{old('description', $task->description)}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
