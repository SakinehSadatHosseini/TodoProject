<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Todos;
use App\Http\Requests\TodosRequest;

class TodosController extends Controller
{
    //
    public function todosPage($category_id=0, $done=0, $deleted=0)
    {
        $categories=Categories::categoriesList();
        $todos=Todos::todosList($category_id, $done, $deleted);
        return view('TodosContents.index', ['categories'=>$categories,'todos'=>$todos]);
    }
    
    public function todosPageDone()
    {
        $category_id=0;
        $done=1;
        $deleted=0;
        return $this->todosPage($category_id, $done, $deleted);
    }

    public function todosPageDeleted()
    {
        $category_id=0;
        $done=0;
        $deleted=1;
        return $this->todosPage($category_id, $done, $deleted);
    }

    public function todoDetailPage($id)
    {
        $categories=Categories::categoriesList();
        $todo=Todos::todoItem($id);
        return view('TodosContents.viewTodo', ['categories'=>$categories,'todo'=>$todo]);
    }

    
    public function createTodo()
    {
        $categories=Categories::categoriesList();
        return view('TodosContents.formTodo', ['categories'=>$categories]);
    }

    public function viewUpdateTodo($id)
    {
        $categories=Categories::categoriesList();
        $todo=Todos::todoItem($id);
        return view('TodosContents.formUpdate', ['categories'=>$categories,'todo'=>$todo]);
    }

    public function updateTodo(TodosRequest $request)
    {
        # Validations before update
        $todo=Todos::todoUpdate($request);
        return redirect()->route('todos.home');
    }

    public function storeTodo(TodosRequest $request)
    {
        # Validations before store
        $todo=Todos::todoStore($request);
        return redirect()->route('todos.home');
    }

    public function doneDeleteTodo(Request $request)
    {
        if (isset($_POST['done'])) {
            $todo=Todos::todoDone($_POST['id']);
        } elseif (isset($_POST['delete'])) {
            $todo=Todos::todoDelete($_POST['id']);
        }
        return redirect()->route('todos.home');
    }
}
