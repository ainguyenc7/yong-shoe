<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    //
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        $products = $this->productService->index($data);
        return view('admin.products.index', compact('products'));
    }

    public function addProduct()
    {
        $categories = $this->productService->getAllCategory();
        return view('admin.products.add-product', compact('categories'));
    }

    public function addProductHandle(Request $request)
    {
        $data = $request->all();
        $this->productService->addProductHandle($data);
        return redirect()->route('product.index')->with('success', 'Category updated successfully');
    }

    public function updateProduct($productId)
    {
        $product = $this->productService->getProductById($productId);
        $categories = $this->productService->getAllCategory();
        return view('admin.products.update-product', compact('product', 'categories'));
    }
    public function updateProductHandle(Request $request, $productId)
    {
        $data = $request->all();
        $this->productService->updateProductHandle($productId, $data);
        return redirect()->route('product.index')->with('success', 'Category updated successfully');
    }

    public function listCategory(Request $request)
    {
        $data = $request->all();
        $categories = $this->productService->getCategories($data);
        return view('admin.products.categories', compact('categories'));
    }
    public function addCategory()
    {
        return view('admin.products.add-category');
    }
    public function addCategoryHandle(Request $request)
    {
        $data = $request->all();
        $this->productService->addCategoryHandle($data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }
    public function updateCategory($catId)
    {
        $category = $this->productService->getCategoryById($catId);
        return view('admin.products.update-category', compact('category'));
    }
    public function updateCategoryHandle(Request $request, $catId)
    {
        $data = $request->all();
        $this->productService->updateCategoryHandle($catId, $data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }
    public function deleteCategory($catId)
    {
        $this->productService->deleteCategory($catId);
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
