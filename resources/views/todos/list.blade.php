@if (count($todos) > 0)
<div class="container">
    <div class="panel-body">
      <div class="container">
        <table class="table">
          
            <thead>
                <th>Todos</th>
                <th>&nbsp;</th>
            </thead>

            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td class="table-text">
                            <div>{{ $todo->name }}</div>
                        </td>

                        <td>
                          <a href="{{ route('todos.edit', ['todo'=>$todo])}}" class="btn btn-success">Edit</a>
                        </td>

                        <td>
                            <form action="/todo/{{ $todo->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                    
                                <button class="btn btn-danger">Delete Task</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endif