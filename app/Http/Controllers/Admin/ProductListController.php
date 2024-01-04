<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    //////GET productlist by remark
    public function ProductListByRemark(Request $request)
    {
        $remark = $request->remark; ///get remark
        $productlist = ProductList::where("remark", $remark)->limit(8)->get(); ///get the filed remark
        return $productlist;
    }
    //////GET productlist by category
    public function ProductListByCategory(Request $request)
    {
        $Category = $request->category; ///get Category
        $productlist = ProductList::where("category", $Category)->get(); ///get the filed Category
        return $productlist;
    }
    //////GET productlist by subcategory
    public function ProductListBySubCategory(Request $request)
    {
        $Category = $request->category; ///get Category
        $SubCategory = $request->subcategory; ///get SubCategory
        $productlist = ProductList::where("category", $Category)->where("subcategory", $SubCategory)->get(); ///get the filed Category
        return $productlist;
    }
    /////////////get request - search some product
    public function ProductBySearch(Request $request)
    {
        $key = $request->key; ////get the key from the request.
        /////////search and get from the database - base on the title or on the brand
        $productlist = ProductList::where("title", 'LIKE', "%{$key}%")->orWhere("brand", 'LIKE', "%{$key}%")->get(); ///get somting like.
        return $productlist;
    }
}
