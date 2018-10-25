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

      <div class="form-group">
          <label for="body">Todo description</label>
          <input type="text" class="form-control" id="name" name="description" value="{{$todo->description}}">
      </div>

      <div class="col-sm-6">  
          @if ($todo->completed)
          <input type="checkbox" class="form-check-input" id="completed" name="completed" checked>
          @else
            <input type="checkbox" class="form-check-input" id="completed" name="completed" >
          @endif
          <label class="form-check-label" for="completed"
          
          >Did you complete it yet?</label>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

  </form>
</div>

@endsection