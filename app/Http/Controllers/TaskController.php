<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Lấy dữ liệu: có 3 cách
        //$tasks = Task::orderBy('created_at', 'desc')->get();
        $tasks = Task::paginate(5);
        //dd($tasks); //để test dữ liệu

        //Render ra view: có 3 cách
        return view('tasks.index', compact('tasks'));
        //return view("tasks.index", compact("tasks"));
        //return view("tasks.index")->with("tasks", $tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //echo"create";
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //lấy ra lần lượt
        // $task = new Task();
        // $task->title = $request->title;
        // $task->description = $request->description;
        // $task->save(); //lưu vào database
        //hoặc lấy tất cả
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description
        ]);
        return redirect()->route("tasks.index")->with("success","");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        //
        return view("tasks.show", ["task"=> $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        //
        return view("tasks.edit", ["task"=> $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //$task = new Task();
        $task = Task::findOrFail( $id);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'completed'=> $request->input('flexRadioDefault'),
            'created_at'=> $request->created_at,
            'updated_at'=> $request->updated_at
        ]);
        return redirect()->route("tasks.index")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $task = Task::findOrFail( $id);
        $task->delete();
        return redirect()->route("tasks.index")->with("success","");
    }
}
