@extends('layout')

@section('title', 'Crear proyecto')


@section('content')
<h1>Crear nuevo Proyecto</h1>

@include('partials.validation-errors')

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <label for="title">
        Título del proyecto <br>
        <input type="text" name="title" value=" {{old('title')}} ">
    </label>
    <br>
    <label for="url">
        Url del proyecto <br>
        <input type="text" name="url" value=" {{old('url')}} ">
    </label>
    <br>
    <label for="d">
        Descrion del proyecto <br>
        <textarea type="text" name="description">{{old('description')}}</textarea>
    </label>
    <br>
    <button>Guardar</button>
</form>


@endsection