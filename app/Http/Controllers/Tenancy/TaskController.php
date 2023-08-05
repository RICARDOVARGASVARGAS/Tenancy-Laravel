<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::paginate();
        return view('tenancy.tasks.index', compact('tasks'));
    }

    function create()
    {
        return view('tenancy.tasks.create');
    }

    function store(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required|image',
        ]);

        $data['image_url'] = Storage::put('tasks', $request->file('image_url'));

        Task::create($data);

        return redirect()->route('tasks.index');
    }

    function show(Task $task)
    {
        return view('tenancy.tasks.show', compact('task'));
    }

    function edit(Task $task)
    {
        return view('tenancy.tasks.edit', compact('task'));
    }

    function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|image',
        ]);

        // Verificar si se envió una imagen
        if ($request->hasFile('image_url')) {
            Storage::delete($task->image_url);
            $data['image_url'] = Storage::put('tasks', $request->file('image_url'));
        }

        $task->update($data);

        return redirect()->route('tasks.index');
    }

    function destroy()
    {
    }
}
