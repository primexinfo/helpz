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

class ApiOrderController extends Controller
{
    public function store(Request $request){
        return response()->json('ok json');
    }

}
