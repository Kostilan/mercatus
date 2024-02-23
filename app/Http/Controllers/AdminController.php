<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\SizeId;
use App\Models\Category;
use App\Models\Brand;

class AdminController extends Controller
{
    function admin()
    {
        $products = Product::all();
        return view('admin.admin', compact('products'));
    }

    function product_delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Вы успешно удалили запись');
    }

    function product_create()
    {
        $sizes = Size::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product_create', compact('brands', 'categories', 'sizes'));
    }

    function product_create_valid(Request $request)
    {
        $request->validate(
            [
                'title_product' => 'required|string|max:255',
                'description' => 'nullable|string',
                'gender' => 'nullable|string|max:50',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'brand_id' => 'required|exists:brands,id',
                'category_id' => 'required|exists:categories,id',
                'quantity' => 'required|integer|min:1',
                'cost' => 'required|numeric|min:1',
                'size_id.*' => 'exists:sizes,id',
            ],
            [
                'title_product.required' => 'Поле "Название" обязательно для заполнения.',
                'title_product.string' => 'Поле "Название" должно содержать текст.',
                'title_product.max' => 'Поле "Название" не должно превышать 255 символов.',

                'description.string' => 'Поле "Описание" должно содержать текст.',

                'gender.string' => 'Поле "Пол" должно содержать текст.',
                'gender.max' => 'Поле "Пол" не должно превышать 50 символов.',

                'photo.image' => 'Поле "Фото" должно содержать изображение.',
                'photo.mimes' => 'Допустимые форматы изображений: JPEG, PNG, JPG, GIF.',

                'brand_id.required' => 'Поле "Бренд товара" обязательно для заполнения.',
                'brand_id.exists' => 'Указанный бренд не существует.',

                'category_id.required' => 'Поле "Категория товара" обязательно для заполнения.',
                'category_id.exists' => 'Указанная категория не существует.',

                'quantity.required' => 'Поле "Количество" обязательно для заполнения.',
                'quantity.integer' => 'Поле "Количество" должно быть целым числом.',
                'quantity.min' => 'Поле "Количество" должно быть не менее 1.',

                'cost.required' => 'Поле "Цена" обязательно для заполнения.',
                'cost.numeric' => 'Поле "Цена" должно быть числом.',
                'cost.min' => 'Поле "Цена" должно быть не менее 1.',

                'size_id.*.exists' => 'Указанный размер не существует.',
            ]
        );
        
    }
}
