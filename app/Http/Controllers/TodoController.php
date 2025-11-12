<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(StoreTodoRequest $request)
    {
        Todo::create($request->validated());
        return redirect()->route('todos.index')->with('success', 'تم إضافة المهمة بنجاح!');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(StoreTodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return redirect()->route('todos.index')->with('success', 'تم تحديث المهمة بنجاح!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'تم حذف المهمة بنجاح!');
    }

    public function updateTodoStatus(Todo $todo)
    {
        $todo->update(['completed' => !$todo->completed]);
        return redirect()->route('todos.index')->with('success', 'تم تحديث حالة المهمة بنجاح!');
    }
}