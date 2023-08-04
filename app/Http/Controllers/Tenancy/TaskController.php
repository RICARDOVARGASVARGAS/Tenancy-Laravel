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
        return view('tenancy.tasks.index');
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

    function show()
    {
        return view('tenancy.tasks.show');
    }

    function edit()
    {
        return view('tenancy.tasks.edit');
    }

    function update()
    {
    }

    function destroy()
    {
    }
}
