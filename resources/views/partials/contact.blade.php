@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form>
    <input name"name" placeholder="Nombre..."><br>
    <input type="email" name"email" placeholder="Email..."><br>
    <input name"subject" placeholder="Asunto"><br>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    <button>Enviar</button>
    </form>
@endsection