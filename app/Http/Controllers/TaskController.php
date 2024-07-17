<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(Request $request){
        // $request->validate([
        //     'task' => 'required',
        //     'user_id' => 'required|integer|exists:users,id',
        // ]);

        $task = Task::create([
            'task' => $request->task,
            'status' => 'pending',
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'task' => $task,
            'status' => 1,
            'message' => 'successfully created a task',
        ]);
        

    }

    public function updateStatus(Request $request){
        $task = Task::findOrFail($request->task_id);
        $task->status = $request->status;
        $task->save();

        $message = $task->status === 'done' ? 'Marked task as done' : 'Marked task as pending';

        return response()->json([
            'task' => $task,
            'status' => 1,
            'message' => $message,
        ]);
    }
}
