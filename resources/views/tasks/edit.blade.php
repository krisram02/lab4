@extends('tasks.layout')

@section('content')
<div class="container mt-5">
        <h1 class="display-4">Editando tarea: {{ $task->id }}</h1>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ $task->description }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-danger">Actualizar</button>
        </form>
    </div>

<!--
<h1>Editando tarea ID: {{ $task->id }}</h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ $task->name }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Actualizar</button>
</form>

-->
