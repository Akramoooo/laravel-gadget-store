<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Services\ImageService;

class ProductController extends Controller
{
    public $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }


    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        return view('product.home', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $image = $request->file('image');
        $filename = $this->imageService->makeImg($image, 'prod_images');
        unset($data['image']);
        $data['image'] = $filename;
        Product::create($data);

        return redirect()->route('product.home');
    }

    public function show()
    {
    }


    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
