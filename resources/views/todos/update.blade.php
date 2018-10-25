@extends('layout')
@section('content')
@include('layouts.errors')
<div class="container">
  <form action="
  {{ 
    route(
      'todos.update',
      ['todo'=>$todo]
    )
  }}
    " 
    method="POST">

      {{ csrf_field() }}
      
      {{ method_field('PATCH') }}

      <div class="form-group">
        <label for="body">Todo title</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$todo->name}}">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

  </form>
</div>

@endsection