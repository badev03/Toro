<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')
            ->select('id', 'name', 'slug', 'parent_id', 'status')
            ->where('status', 1)
            ->where('parent_id', 0)
            ->get();

        // Lấy danh mục đầu tiên nếu có ít nhất một danh mục
        $selectedCategory = $categories->isEmpty() ? null : $categories->first();

        return view('clients.page.home.product', compact('categories', 'selectedCategory'));
    }

    public function findProductByCategory($slug)
    {
        $categories = Category::with('products')
            ->select('id', 'name', 'slug', 'parent_id', 'status')
            ->where('status', 1)
            ->where('parent_id', 0)
            ->get();

        $selectedCategory = $categories->where('slug', $slug)->firstOrFail();
        $products = $selectedCategory->products()->where('status', 1)->get();

        return view('clients.page.home.product', compact('categories', 'products', 'selectedCategory'));
    }
}

