@extends('layout')

@section('title', 'Crear proyecto')


@section('content')
<h1>Editar Proyecto</h1>

@include('partials.validation-errors')

<form method="POST" action="{{ route('projects.update', $project) }}">
    @csrf @method('PATCH') 


    <label for="title">
        Título del proyecto <br>
        <input type="text" name="title" value="{{ old('title', $project->title) }}" >
    </label>
    <br>
    <label for="url">
        Url del proyecto <br>
        <input type="text" name="url" value="{{ old('url', $project->url) }}">
    </label>
    <br>
    <label for="description">
        Descrion del proyecto <br>
        <textarea type="text" name="description"> {{ old('description', $project->description) }}</textarea>
    </label>
    <br>
    <button>Actualizar</button>
</form>


@endsection