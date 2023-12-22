<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategoreis;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /////Get all Category data
    public function AllCategory()
    {
        $categories = Category::all(); ///get all
        $categoryDetailsArray = [];
        ////get all subcategories per category
        foreach ($categories as $value) {
            $subcategory = Subcategoreis::where("category_name", $value["category_name"])->get();
            $item = [
                "category_name" => $value["category_name"],
                "category_image" => $value["category_image"],
                "category_name" => $subcategory,
            ];
            array_push($categoryDetailsArray, $item); ///add to the aaray details.
        }
        return $categoryDetailsArray;
    }
}
