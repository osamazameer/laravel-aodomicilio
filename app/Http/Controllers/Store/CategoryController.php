<?php

namespace App\Http\Controllers\Store;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // GET Request -> Dashboard?
    public function index()
    {
        // Collection of Category(s)
        $categories = Category::get();

        // dd($categories);
        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }

    // GET Request -> that shows the form to create the category
    public function create(Request $request)
    {
        return view('admin.category.create');
    }


    // POST Request -> that saves the data to db
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:255',
        ]);


        // Checking if the checkbox is pressed or not
        if($request->has('is_active'))
        {
            $request['is_active'] = 1;
        }
        else {
            $request['is_active'] = 0;
        }

        // If Created Successfully, great!
        if(Category::create($request->only('title','description','is_active'))) {
            return back()->with('status', 'Created Successfully');
        }

        // No? No worries, try again!
        return back()->with('error', 'Error Occured, please try again');
    }
}
