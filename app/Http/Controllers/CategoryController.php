<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {

        $categories = Category::withCount('products')
            ->orderBy('products_count', 'desc')
            ->get();

        // toastr()->success('Success Message');

        return view('admin.categories.index', compact('categories'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $existence = Category::where('id', $id)->exists();

        $category = Category::find($id);
        $products = Product::whereHas('categories', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        $cat = Category::find($id);
        $count = $cat->products()->count();

        return view('admin.categories.show', compact('category', 'products', 'id', 'count'));

    }

    public function create()
    {

        return view('admin.categories.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'category_name' => 'required|unique:categories',
            'description' => 'required',
            'image' => 'required|max:2048',
        ],
            [

                'category_name.required' => 'category name is required',
                'category_name.unique' => 'category name already exists',
                'description.required' => 'category description is required',
                'image.required' => 'category image is required',
                'image.max' => 'max file upload size is 2M',
            ]);

        $path = $request->file('image')->store('public/files');

        $checker = Category::create([

            'category_name' => $request->category_name,
            'description' => $request->description,
            'slug' => Str::slug($request->category_name),
            'category_image' => $path,

        ]);

        // Session::put('message', 'category created s');
        return redirect()->route('admin.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);
        $filename = $category->category_image;
        $category->delete();
        Storage::delete($filename);

        return redirect()->route('admin.categories.index')->with('delete', 'category deleted');
    }

}
