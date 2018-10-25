
<form action="/todo" method="POST" class="form-horizontal">
  {{ csrf_field() }}

  <div class="form-group">
      <label for="todo" class="col-sm-3 control-label">Todo name</label>

      <div class="col-sm-6">
          <input type="text" name="name" id="todo" class="form-control">
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