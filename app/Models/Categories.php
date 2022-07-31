<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public static function categoriesList()
    {
        $categories =array();
        $categories= self::query()->where('delete_status', 0)->get()->all();
        return $categories;
    }
}
