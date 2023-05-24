@extends('layouts.app')
@section('title', 'Nuevo Usuario')

@section('content')
<h1>Nuevo usuario </h1>
@include('includes.validations-form')

<form action="{{route ('users.store')}}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection
