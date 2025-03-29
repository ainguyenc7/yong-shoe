<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getProductById($productId)
    {
        return Product::find($productId);
    }
    public function getAllCategory()
    {
        return Category::get();
    }

    public function index($filter)
    {
        $query = Product::query();
        if (isset($filter['keyword'])) {
            $query = $query->where('name', 'like', '%' . $filter['keyword'] . '%');
        }
        if (isset($filter['category_id'])) {
            $query->where('category_id', $filter['category_id']);
        }
        $data = $query->paginate(10);
        return $data;
    }
    public function addProductHandle($data)
    {
        $dataSave = [
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'images' => $data['images'] ?? '',
            'link_shoppe' => $data['link_shoppe'] ?? '',
            'status' => $data['status'] ?? 1,
            'quantity' => $data['quantity'] ?? 0,
        ];
        Product::create($dataSave);
        return true;
    }

    public function updateProductHandle($productId, $data)
    {
        $dataSave = [
            'name' => $data['name'],
            'description' => $data['description'] ?? '',
            'price' => $data['price'] ?? 0,
            'category_id' => $data['category_id'] ?? 0,
            'quantity' => $data['quantity'] ?? 0,
            'link_shoppe' => $data['link_shoppe'] ?? '',
            'status' => $data['status'] ?? 1,
        ];
        //sử lý xóa ảnh cũ và upload ảnh mới
        Product::where('id', $productId)->update($dataSave);
        return true;
    }
    public function deleteProduct($productId)
    {
        Product::where('id', $productId)->delete();
        // xóa ảnh
        return true;
    }



    public function getCategories($filter)
    {
        $query = Category::query();
        if (isset($filter['keyword'])) {
            $query = $query->where('name', 'like', '%' . $filter['keyword'] . '%');
        }
        $data = $query->paginate(10);
        return $data;
    }
    public function addCategoryHandle($data)
    {
        $dataSave = [
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image'] ?? '',
            'slug' => $data['slug'],
        ];
        Category::create($dataSave);
        return true;
    }
    public function getCategoryById($CatId)
    {
        return Category::find($CatId);
    }

    public function updateCategoryHandle($CatId, $data)
    {
        $dataSave = [
            'name' => $data['name'],
            'description' => $data['description'] ?? '',
            // 'status' => $data['status'],
            'slug' => $data['slug'] ?? '',
        ];
        //sử lý xóa ảnh cũ và upload ảnh mới
        Category::where('id', $CatId)->update($dataSave);
        return true;
    }

    public function deleteCategory($CatId)
    {
        Category::where('id', $CatId)->delete();
        // xóa ảnh
        return true;
    }
}
