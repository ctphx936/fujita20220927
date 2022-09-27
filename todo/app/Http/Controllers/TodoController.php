<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    //一覧表示
    public function index()
    {
        $todo = Todo::all();
       return view('list', ['todos' => $todo]);
    }
    
    //作成
    public function create(TodoRequest $request)
    {
         $form = $request->all();
        Todo::create($form);
        return redirect('/');
	}


    //更新
    public function update(TodoRequest $request, $id)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::find($id)->update($form);
        
        return redirect('/');
    }

    //削除
    public function remove($id)
    {
       
        $todo = Todo::find($id)->delete();
        return redirect('/');
    
    }

}