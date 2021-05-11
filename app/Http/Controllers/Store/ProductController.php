<?php

namespace App\Http\Controllers\Store;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        
        return view('admin.product.index',[
            'products' => $products 
        ]);
    }

    public function create()
    {
        $categories = Category::get();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    // POST Request -> that saves the data to db
    public function store(Request $request)
    {
       
      
       
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required'
        ]);

        // Checking if the checkbox is pressed or not
        if($request->has('is_active'))
        {
            $request['is_active'] = 1;
        }
        else {
            $request['is_active'] = 0;
        }

        // TODO: Be able to Upload Image

        // If Created Successfully, great!
        if(Product::create($request->only('title','description','category_id','is_active','price'))) {
            return back()->with('status', 'Created Successfully');
        }

        // No? No worries, try again!
        return back()->with('error', 'Error Occured, please try again');
    }

}
