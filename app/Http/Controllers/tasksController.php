<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{

    public function store(Request $request) {

        $this->validate($request, [
            'project_id'    => 'exists:projects,id',
            'categorie'     => 'exists:categories,id',
            'user'          => 'exists:users,id',
            'title'         => 'required',
            'description'   => 'required',
            'deadline'      => 'date'
        ]);

        $task = new \App\Task();
        $task->project_id   = $request->project_id;
        $task->categorie_id = $request->categorie;
        $task->user_id      = $request->user;
        $task->title        = $request->title;
        $task->description  = $request->description;
        $task->deadline     = $request->deadline;
        $task->completed    = 0;
        $task->save();

        return back()->with('success', 'Succesfully added task');

    }

}
