@extends('layout')

@section('content')

      @include('layouts.errors')

      @include('todos.create')

      @include('todos.list')
    
@endsection