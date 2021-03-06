<?php

namespace App\Http\Controllers\Api\v1;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    /**
     * Display a listing of all the todos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return Todo::all();
    }

    /**
     * Store a newly created todo to the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description'=> 'required|max:255',
            'completed'=>'required'
        ]);

        $todo = new Todo;

        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->completed = $request->completed;

        $todo->save();

        return $todo;
    }

    /**
     * Display the specified todo.
     *
     * @param  $id item to show.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Todo::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id item to edit.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required|max:255',
            'description'=> 'required|max:255',
            'completed'=>'required'
        ]);

        $todo = Todo::findOrFail($id);

        $todo->name = $request->name;        
        $todo->description = $request->description;
        $todo->completed = $request->completed;

        $todo->save();

        return $todo;

    }

    /**
     * Remove the todo from the database.
     *
     * @param  $id item to delete.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        if($todo != null){
            $todo->delete();
            return "Deleted succesfully!";
        }

        return "Couldn't find the todo item with id: {$id}.";
    }
}
