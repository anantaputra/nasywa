<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public static function getTotalVariant($category_id)
    {
        $variants = Variant::where('category_id', $category_id)->get();
        return $variants->count();
    }

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function add()
    {
        $subtitle = 'Tambah Kategori';

        return view('admin.category.add', compact('subtitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $lastnumber = Category::orderBy('id', 'desc')->first();
        if ($lastnumber) {
            $lastnumber = $lastnumber->id;
            $lastnumber = explode('_', $lastnumber);
            $lastnumber = $lastnumber[1];
            $lastnumber = (int)$lastnumber;
            $lastnumber++;
        } else {
            $lastnumber = 1;
        }

        Category::create([
            'id' => 'category_' . $lastnumber,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.category')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit($id)
    {
        $category = Category::where('name', $id)->first();

        $subtitle = 'Edit Kategori';

        if($category){
            return view('admin.category.add', compact('subtitle', 'category'));
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $category = Category::where('id', $request->id)->first();

        if ($category->name != $request->name){

            $category->name = $request->name;
            $category->save();
    
            return redirect()->route('admin.category')->with('success', 'Kategori berhasil diubah');

        } else {
            return redirect()->route('admin.category');
        }

    }

    public function detail($id)
    {
        $category = Category::where('name', $id)->first();

        $variants = Variant::all();

        return view('admin.category.detail', compact('category', 'variants'));
    }

    public function addVariant($category)
    {
        $category = Category::find($category);

        return view('admin.category.add-variant', compact('category'));
    }

    public function storeVariant(Request $request)
    {
        $request->validate([
            'name' => ['required', Rule::unique('variants')->where(function ($query) use ($request) {
                return $query->where('category_id', $request->category_id);
            })],
        ]);

        Variant::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        $category = Category::find($request->category_id);

        return redirect()->route('admin.category.detail', $category->name)->with('success', 'Varian berhasil ditambahkan');

    }
}
