@extends('tasks.layout')

@section('content')
<div class="container mt-5">
        <h1 class="display-4">Tarea ID: {{ $task->id }}</h1>
        <hr>
        <h2 class="h4">{{ $task->name }}</h2>
        <p>{{ $task->description }}</p>
        
        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary mb-3">Editar</a>
        
        <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

<!--
<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit">Editar</a>
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
-->