<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;


class ApiCategoryController extends Controller
{

    public function productAscategories(Request $request)
    {
        if($request->category_id){
            $product = Product::with('galleries')->where('category_id',$request->category_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }
        elseif($request->subcategory_id){
            $product = Product::with('galleries')->where('subcategory_id',$request->subcategory_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }
        elseif($request->childcategory_id){
            $product = Product::with('galleries')->where('childcategory_id',$request->childcategory_id)->get();
            if(!empty($product)){
                return response()->json($product);
            }
            else{
                return response()->json('not found');
            }
        }
        else{
            return response()->json('not found');
        }

    }

}
