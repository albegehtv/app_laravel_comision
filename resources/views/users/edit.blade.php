@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Editar Usuario {{ $user->name }}</h1>

  <form action="{{ route('users.update', $user->id) }}" method="POST" class="max-w-md mx-auto">
    @method('PUT')
    @include('users._partials.form')
  </form>
@endsection
