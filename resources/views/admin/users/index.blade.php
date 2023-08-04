@extends('admin.layouts.app')

@section('title', 'Fórum')

@section('header')
    @include('admin.users.partials.header', compact('users'))
@endsection

@section('content')
    @include('admin.users.partials.content')
    <x-pagination :paginator="$users" :appends="$filters" />
@endsection
