@extends('layout')

@section('title', 'Contact')


@section('content')
<h1>Contect</h1>
<form method="POST" action="{{route('messages.store')}}">
    @csrf @method('POST')
    <input type="text" placeholder="Nombre..." name="nombre" value="{{old('nombre')}}" ><br>
    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Correo..." name="correo" value="{{ old('correo') }}" ><br>
    {!! $errors->first('correo', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Celular" name="celular" value="{{ old('') }}"><br>
    {!! $errors->first('celular', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Ciudad" name="ciudad" value="{{ old('') }}"><br>
    {!! $errors->first('ciudad', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Direccion" name="direccion" value="{{ old('') }}"><br>
    {!! $errors->first('direccion', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Descripcion" name="descripcion" value="{{ old('') }}"><br>
    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Marca" name="marca" value="{{ old('') }}"><br>
    {!! $errors->first('marca', '<small>:message</small><br>') !!}
    <input type="text" placeholder="Modelo" name="modelo" value="{{ old('') }}"><br>
    {!! $errors->first('modelo', '<small>:message</small><br>') !!}
    <button>Enviar</button>

    
</form>
@endsection