@extends('tasks.layout')

@section('content')
<div class='container'>
<h1>Crear una tarea</h1>
<hr>
<form action="/tasks" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Crear</button>
</div>
@endsection