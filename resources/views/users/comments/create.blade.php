@extends('layouts.app')
@section('title', "Nuevo Comentario {$user->name}")

@section('content')
<h1 class="text-2xl font-bold mb-4">Nuevo Comentario {{$user->name}}</h1>


<form action="{{route ('comments.store', $user->id)}}" method="post" class="max-w-md mx-auto" >
    @csrf
    @include('users.comments._partials.form')
</form>

@endsection
