<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    //
    public function categoriesPage($deleted=0)
    {
        $categories=Categories::categoriesList($deleted);
        return view('categoriesContents.index', ['categories'=>$categories]);
    }

    public function categoriesPageDeleted()
    {
        $deleted=1;
        return $this->categoriesPage($deleted);
    }

    public function createCategory()
    {
        return view('categoriesContents.formCategory');
    }

    public function viewUpdatecategory($id)
    {
        $category=Categories::categoryItem($id);
        return view('categoriesContents.formUpdate', ['category'=>$category]);
    }

    public function updateCategory(CategoriesRequest $request)
    {
        # Validations before update
        $category=Categories::categoryUpdate($request);
        return redirect()->route('categories.home');
    }

    public function storeCategory(CategoriesRequest $request)
    {
        # Validations before store
        $categories=Categories::CategoryStore($request);
        return redirect()->route('categories.home');
    }
    public function deleteCategory(Request $request)
    {
        $category=Categories::categoryDelete($_POST['id']);
        return redirect()->route('categories.home');
    }
}
