<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function submit(Request $request): string{
        return 'Name: ' . $request->input('name').
            '<br>Email: ' . $request->input('email').
            '<br>Text: ' . $request->input('text');
    }

    public function shop(Request $request){
        $type = array(
            'all' => 0,
            'first' => 1,
            'second' => 2,
            'dessert' => 3,
            'drink' => 4
        );
        $sort = array(
            'popularity' => 'orders',
            'cheap' => 'price',
            'expensive' => 'price'
        );

        $requestType = $request->input('type');
        $requestSort = $request->input('sortBy');

        if($requestType == null) $requestType = 'all';
        if($requestSort == null) $requestSort = 'popularity';


        if($requestType == 'all'){
            $products = Product::all();
        } else{
            $products = Category::find($type[$requestType])->products;
        }

        if($requestSort == 'popularity') {
            $products = $products->sortByDesc($sort[$requestSort]);
        } else{
            if($requestSort == 'cheap'){
                $products = $products->sortBy($sort[$requestSort]);
            } else {
                $products = $products->sortByDesc($sort[$requestSort]);
            }

        }
        $products->values()->all();
        return view('shop', ['products' => $products]);
    }
}
