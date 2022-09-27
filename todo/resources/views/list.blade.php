@extends('layout')
@section('title', 'ToDo一覧')
@section('content')



<div class="mainform">
    <div class="mainform__2">

        <div class="title">Todo List</div>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif 
    
<form action="/create" method="post" >
        @csrf
        <div class="textbox">
                <input type="text"  name="content" class="textform1">
                <button class="btn" type="submit" >追加</button>
        </div>

        </form>
        <br>

        <table class="table table-striped">
            <tr>
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>

                <th></th>
                <th></th>
            </tr>
            
            @foreach($todos as $todo)
            <tr>
                <div class="textbox2">
                <td>{{ $todo->created_at  }}</td>

                <form action="{{ route('Todo.update', ['id'=>$todo->id]) }}" method="POST">
                @csrf
                
                <td><input type="text" name="content" value={{$todo->content}} class="textform2"></td>
                <td><button class="btn2" type="submit" >更新</button></td>
                
                </form>
                <td>
        
                <form action="{{ route('Todo.remove', ['id'=>$todo->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn3">削除</button>
                </form>
                </td>
            </div>
            </tr>
            @endforeach
            
        </table>
        </div>
</div>
@endsection


