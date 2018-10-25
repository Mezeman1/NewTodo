
<form action="/todo" method="POST" class="form-horizontal">
  {{ csrf_field() }}

  <div class="form-group">
      <label for="todo" class="col-sm-3 control-label">Todo name</label>

      <div class="col-sm-6">
          <input type="text" name="name" id="todo" class="form-control">
      </div>

      <label for="todo-description" class="col-sm-3 control-label">Todo Description</label>

      <div class="col-sm-6">
          <input type="text" name="description" id="todo-description" class="form-control">
      </div>

      
      <div class="col-sm-6">  
            <input type="checkbox" class="form-check-input" id="completed" name="completed">
            <label class="form-check-label" for="completed">Did you complete it yet?</label>
      </div>
      

  </div>

  <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-primary">
              Add Task
          </button>
      </div>
  </div>
</form>
</div>