@extends('layouts.layout')

@section('content')
<h1>Delete Task</h1>
<h2>Are you sure that you want to delete the task ({{$task->title}}) ?</h2>
<form action="{{ route('task.assistant_delete', $task->id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="nav-link active" aria-current="page" href="/">Back home</a>
</form>
@endsection
