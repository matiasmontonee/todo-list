<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // GET /tasks
    public function index()
    {
        return Task::all();
    }

    // POST /tasks
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'is_completed' => false,
        ]);

        return response()->json($task, 201);
    }

    // PUT /tasks/{id}
    public function markAsCompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->is_completed = true;
        $task->save();

        return response()->json($task);
    }
}
