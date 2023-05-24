@extends('layouts.app')
@section('title', 'Editar Usuario')

@section('content')
<h1>Editar Usuario {{ $user->name}}  </h1>
@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')


@endsection
