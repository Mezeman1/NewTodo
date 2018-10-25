<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'asc')->get();

        return view('todos.index', [
            'todos' => $todos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $todo = new Todo;
        $todo->name = $request->name;
        $todo->description = $request->description;

        if($request->completed == 'on'){
            $todo->completed = 1;
        }

        $todo->save();

        return $this->redirectHome();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todos.update', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $this->validate($request, [
            'name'=> 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $todo->name = $request->name;       
        $todo->description = $request->description;

        if($request->completed == 'on'){
            $todo->completed = 1;
        } else {
            $todo->completed = 0;
        }

        $todo->save();

        return $this->redirectHome();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return $this->redirectHome();
    }

    private function redirectHome() {
        return redirect()->route('todos.index');
    }
}
