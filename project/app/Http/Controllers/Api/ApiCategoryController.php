<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;


class ApiCategoryController extends Controller
{

// CATEGORIES SECTOPN

    public function productAscategories(Request $request)
    {
        //return response()->json($request);
        if($request->category_id){
            $product = Product::where('category_id',$request->category_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }
        elseif($request->subcategory_id){
            $product = Product::where('subcategory_id',$request->subcategory_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }
        elseif($request->childcategory_id){
            $product = Product::where('childcategory_id',$request->childcategory_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }


    }




}
