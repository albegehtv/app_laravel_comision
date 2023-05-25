
@extends('layouts.app')

@section('title', "Comentarios del Usuario {$user->name}")

@section('content')

<h1 class="text-2xl font-bold mb-4">Cometarios del Usuario {{$user->name}}
     ( <a href="{{ route('comments.create', $user->id) }}">Add</a> )</h1>

<form  method="GET" class="mb-4">
  <input type="text" name="search" placeholder="Buscar" class="mr-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  <button type="submit" class="shadow bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
</form>

<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Contenido
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Visible
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Acciones
           </th>

      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      @foreach($comments as $comment)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">{{ $comment->body }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $comment->visible ? 'SI' : 'NO'}}</td>
          <td class="px-6 py-4 whitespace-nowrap ">
            <a href="{{ route('comments.edit', ['user'=>$user->id, 'id'=>$comment->id]) }}" > Editar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
