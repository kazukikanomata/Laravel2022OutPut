<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function create(Category $category){
        return view('tasks/create')->with(['categories' => $category->get()]);
    }

    public function store(Request $request){
        $inputs = $request->validate([
            'content'=>'required|max:255',
            'due_time'=>'required',
            'status'=>'required',
            'time'=>'required',
            'category_id'=>'required',
        ]);
        $task = new Task();
        $task->content = $inputs['content'];
        $task->due_time = $inputs['due_time'];
        $task->status = $inputs['status'];
        $task->time = $inputs['time'];
        $task->category_id = $inputs['category_id'];
        $task->user_id = auth()->user()->id;
        $task->save();
        return back()->with('message','タスクを保存しました');
    }

    public function show(Request $request, $task){
        $task = Task::find($task);
        return view('tasks/show')->with(['task' => $task]);
    }

    public function edit(Request $request, Task $task){
        $categories = Category::all();
        return view('tasks/edit')->with(['task' => $task,'categories'=> $categories]);
    }

    public function update(Request $request, Task $task){
        //$input_task = $request['task'];
        //$task->fill($input_task)->save();
        $inputs = $request->validate([
            'content'=>'required|max:255',
            'due_time'=>'required',
            'status'=>'required',
            'time'=>'required',
            'category_id'=>'required',
            ]);
        
        $task->content = $inputs['content'];
        $task->due_time = $inputs['due_time'];
        $task->status = $inputs['status'];
        $task->time = $inputs['time'];
        $task->category_id = $inputs['category_id'];
        $task->user_id = auth()->user()->id; //もしユーザーidがあったら
        $task->update();
        // Task::create($request->all());
        return redirect('/categories')->with('message','タスクを更新しました');
    }

    public function destory(Task $task){
        $task->delete();
        return back()->with('message','タスクを削除しました');
    }
}
