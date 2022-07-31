<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public static function categoriesList($deleted=0)
    {
        $categories =array();
        if ($deleted==0) {
            $categories= self::query()->where('delete_status', 0)->get()->all();
        } else {
            $categories= self::query()->where('delete_status', 1)->get()->all();
        }
        return $categories;
    }

    public static function categoryItem($id)
    {
        $category = self::query()->where('id', $id)->first();
        return $category;
    }

    public static function categoryUpdate($request)
    {
        $category = self::query()->where('id', $request->id)->first();
        $category->title = $request->title;
        if ($category->save()) {
            return $category;
        }
        return;
    }

    public static function categoryStore($request)
    {
        $category = new Categories;
        $category->title = $request->title;
        $category->delete_status = 0;
        if ($category->save()) {
            return $category;
        }
        return;
    }

    public static function categoryDelete($id)
    {
        $category = self::query()->where('id', $id)->first();
        if ($category) {
            if ($category->delete_status==0) {
                $todo=Todos::todoDelete_category($id, $category->delete_status);
                $category->delete_status = 1;
            } else {
                $todo=Todos::todoDelete_category($id, $category->delete_status);
                $category->delete_status = 0;
            }
            if ($category->save()) {
                return $category;
            }
        }
        return;
    }
}
