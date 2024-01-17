<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.category.index', ['categories' => Category::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
        ]);
        $data['slug'] = Str::slug($data['name']); //! mengenerate slug otomatis sesuai dengan kategory yang dibuat

        Category::create($data);

        return back()->with('success', 'Category created successfully'); //! membuat keterangan saat category baru berhasil dibuat
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
        ]);
        $data['slug'] = Str::slug($data['name']); //! mengenerate slug otomatis sesuai dengan kategory yang dibuat

        Category::find($id)->update($data);

        return back()->with('success', 'Category updated successfully'); //! membuat keterangan saat category baru berhasil dibuat
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();

        return back()->with('error', 'Category deleted successfully'); //! membuat keterangan saat category baru berhasil dibuat
    }
}
