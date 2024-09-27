<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;

class HomeController extends Controller
{
    public function Read() {
        $tasks = Task::all();
        //compact = convert to assoc array
        return view("task.read", compact('tasks'));
    }
    public function create() {
        return view('task.create');
    }
    public function assistant_create(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024'
        ]);
        Task::create($request->all());
        return redirect()->route('task.read')->with('success', 'Task created successfully!');
    }
    public function update($id) {
        $task = Task::findOrFail($id);
        return view('task.update', compact('task'));
    }
    public function assistant_update(Request $request, $id) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024'
        ]);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect()->route('task.read')->with('success', 'Task updated successfully!');
    }

    public function delete($id) {
        $task = Task::findOrFail($id);
        return view('task.delete', compact('task'));
    }
    public function assistant_delete(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.read')->with('success', 'Task deleted successfully!');
    }
}
