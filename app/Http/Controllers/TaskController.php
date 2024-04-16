<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Education;
use App\Models\Experience;
use Auth;

class TaskController extends Controller
{
    public function empDashboard()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)
        ->orderBy('due_date', 'asc')
        ->take(2) 
        ->get();
        $education = Education::where('user_id', $user->id)->get();
        $experience = Experience::where('user_id', $user->id)->get();

        return view('welcome', [
            'user' => $user,
            'tasks' => $tasks,
            'education' => $education,
            'experience' => $experience,
        ]);
    }

    public function dashboard()
    {
        $taskCounts = [
            'pending' => Task::where('status', 'pending')->count(),
            'in_progress' => Task::where('status', 'in progress')->count(),
            'completed' => Task::where('status', 'completed')->count(),
        ];
        return view('/admin/welcome', ['taskCounts' => $taskCounts]);
    }

    public function viewAllTasks()
    {
        $tasks = Task::with('user')->get();
        return view('admin.tasks', ['tasks' => $tasks]);
    }

    public function loadTask(Request $request)
    {
        $employees = User::all();
        return view('admin.addTasks', ['employees' => $employees]);
    }
    public function assignTask(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in progress,completed',
            'due_date' => 'nullable|date',
        ]);
        $task = new Task([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'pending',
            'due_date' => $request->due_date,
        ]);
        $task->save();

        return redirect()->route('viewAllTasks')->with('success', 'Task assigned successfully.');
    }

    public function markAsComplete($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'completed';
        $task->save();
        return redirect()->route('viewAllTasks')->with('success', 'Task marked as complete.');
    }

    public function viewMyTasks()
    {
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('tasks', ['tasks' => $tasks]);
    }

    public function markAsInProgress($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'in progress';
        $task->save();
        return redirect()->route('myTask') > with('success', 'Task marked as in progress.');
    }

    public function markAsCompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'completed';
        $task->save();
        return redirect()->route('myTask')->with('success', 'Task marked as completed.');
    }
}
