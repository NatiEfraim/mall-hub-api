<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductDetails;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    ////get product data by id.
    public function ProductDetails(Request $request)
    {
        $id = $request->id; ///save the id
        $productDetails = ProductDetails::where("product_id", $id)->get(); ///get the product details
        $productList = ProductList::where("id", $id)->get(); ////get the productList by id

        $item = [
            "productDetails" => $productDetails,
            "productList" => $productList,
        ];

        return $item;
    }
}
