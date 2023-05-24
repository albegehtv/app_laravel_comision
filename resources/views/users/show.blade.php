@extends('layouts.app')
@section('title', 'Lista de Usuario')

@section('content')
<h1>Lista del usuario {{ $user->name}}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Borrar</button>

</form>

@endsection
