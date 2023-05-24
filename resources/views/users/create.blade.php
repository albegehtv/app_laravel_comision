@extends('layouts.app')
@section('title', 'Nuevo Usuario')

@section('content')
<h1>Nuevo usuario </h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error )
        <li class="error">{{ $error }}</li>

        @endforeach
    </ul>

@endif
<form action="{{route ('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}" >
    <input type="email" name="email" placeholder="E-mail:"  value="{{old('email')}}">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">Crear</button>
</form>

@endsection
