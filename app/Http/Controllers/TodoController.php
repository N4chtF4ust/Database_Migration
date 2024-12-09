<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller{

    public function index(){

       $todos = Todo::get();


        return view('index',[
            'todos' => $todos
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
        ]);


       // dd($request->title);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo -> save();
        return back();
    }

    public function del(Todo $todo){
        $todo -> delete();
        return back();
    }
   
}
