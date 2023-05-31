<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('category.index', compact('categories'));
        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Category',
        //     'data' => $categories
        // ], 200);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        // masukkan data ke database
        $category = Category::create([
            'name' => $request->name
        ]);

        // redirect ke halaman category.index
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // tampilkan view edit dan passing data category
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // update data category
        $category->update([
            'name' => $request->name
        ]);

        // redirect ke halaman category.index
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // hapus data category
        $category->delete();

        // redirect ke halaman category.index
        return redirect()->route('category.index');
    }
}
