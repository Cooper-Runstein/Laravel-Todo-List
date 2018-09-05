<?php

namespace App\Http\Controllers;

use Validator;
use App\TodoList as TodoListModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TodoListController extends Controller
{
    //
    public function index()
    {
      $todo_lists = TodoListModel::all();
      return view('todos.todo')->with('todo_lists', $todo_lists);
    }

    public function show($id)
    {
      $list = TodoListModel::findOrFail($id);
      return view('todos.show')-> withList($list);
    }

    public function create()
    {
      return view('todos.create');
    }

    public function store(Request $request)
    {
      $rules = array(
        'title' => 'required|unique:todo_lists,name|max:100'
      );

      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()){
        return redirect('todos/create')->withErrors($validator);
      }

      $list = new TodoListModel();
      $list->name = $request->input('title');
      $list->save();
      return redirect('todos')->with('message', 'List was created');
    }
}
