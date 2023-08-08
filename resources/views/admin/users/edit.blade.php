@extends('admin.layouts.app')

@section('title', 'Editar Cliente')

@section('header')
<h1 class="text-lg text-black-500"  style="color: rgb(255, 255, 255); ">Cliente - {{ $user->id }}</h1>
@endsection

@section('content')
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @include('admin.user.partials.form', ['user' => $user])
</form>
@endsection