<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todos extends Model
{
    use HasFactory;
    public static function todosList($category_id, $done, $deleted)
    {
        $todos =array();
        if ($deleted==1) {
            $todos= self::query()->where('delete_status', 1)->get()->all();
        } else {
            if ($done==0) {
                if ($category_id==0) {
                    $todos= self::query()->where('delete_status', 0)->whereNull('done_at')->get()->all();
                } else {
                    $todos= self::query()->where('category_id', $category_id)->where('delete_status', 0)->whereNull('done_at')->get()->all();
                }
            } else {
                $todos= self::query()->where('delete_status', 0)->whereNotNull('done_at')->get()->all();
            }
        }
        return $todos;
    }

    public static function todoItem($id)
    {
        $todo = self::query()->where('id', $id)->first();
        $todo['category_title']=Categories::where('id', $todo->category_id)->first()->title;
        return $todo;
    }

    public static function todoDone($id)
    {
        $todo = self::query()->where('id', $id)->first();
        if ($todo) {
            if (!$todo->done_at) {
                $todo->done_at = Carbon::now();
            } else {
                $todo->done_at=null;
            }
           
            if ($todo->save()) {
                return $todo;
            }
        }
        return;
    }

    public static function todoDelete($id)
    {
        $todo = self::query()->where('id', $id)->first();
        if ($todo) {
            if ($todo->delete_status==0) {
                $todo->delete_status = 1;
            } else {
                $todo->delete_status = 0;
            }
            if ($todo->save()) {
                return $todo;
            }
        }
        return;
    }

    public static function todoStore($request)
    {
        $todo = new Todos;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->category_id=$request->category_id;
        $todo->delete_status = 0;
        if ($todo->save()) {
            return $todo;
        }
        return;
    }

    public static function todoUpdate($request)
    {
        $todo = self::query()->where('id', $request->id)->first();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->category_id=$request->category_id;
        if ($todo->save()) {
            return $todo;
        }
        return;
    }
}
