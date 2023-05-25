@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')

<h1 class="text-2xl font-bold mb-4">Lista de Usuarios ( <a href="{{ route('users.create') }}">Add</a> )</h1>

<form action="{{ route('users.index') }}" method="GET" class="mb-4">
  <input type="text" name="search" placeholder="Buscar" class="mr-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  <button type="submit" class="shadow bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
</form>

<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Nombre
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Correo electrónico
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Acciones
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      @foreach($users as $user)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
          <td class="px-6 py-4 whitespace-nowrap">
            <form action="{{ route('users.show', $user->id) }}" method="GET" class="inline">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                Detalles
              </button>
            </form>
            <form action="{{ route('users.edit', $user->id) }}" method="GET" class="inline">
              <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                Editar
              </button>
            </form>
            <form action="{{ route('comments.index', $user->id) }}" method="GET" class="inline">
              <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Anotaciones (0)
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
