@extends('layouts.app')

@section('title', 'Lista de Usuario')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Lista del usuario {{ $user->name }}</h1>

  <ul class="mb-4">
    <li class="mb-2"><strong>Nombre:</strong> {{ $user->name }}</li>
    <li class="mb-2"><strong>Email:</strong> {{ $user->email }}</li>
    <li class="mb-2"><strong>Creado en:</strong> {{ $user->created_at }}</li>
  </ul>

  <div>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      @method('DELETE')
      @csrf
      <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Borrar</button>
    </form>
  </div>
@endsection
