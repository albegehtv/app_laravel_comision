@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')

<h1>Lista de Usuarios
   ( <a href="{{route('users.create')}}">Add</a> )
</h1>
<form action="{{route('users.index')}}" method="get">
<input type="text" name="search" placeholder="Buscar">
<button>Buscar</button>
</form>
<ul>

    @foreach ( $users as $user )

    <li>
        {{$user->name}} -
        {{$user->email}}
        | <a href="{{ route('users.show',  $user->id )}}">Detalles</a>
        | <a href="{{ route('users.edit',  $user->id )}}">Editar</a>
    </li>

    @endforeach


</ul>


@endsection
