@extends('layouts.app')
@section('title', 'Nuevo Usuario')

@section('content')
<h1 class="text-2xl font-bold mb-4">Nuevo usuario </h1>
@include('includes.validations-form')

<form action="{{route ('users.store')}}" method="post" class="max-w-md mx-auto" >
    @csrf
    @include('users._partials.form')
</form>

@endsection
