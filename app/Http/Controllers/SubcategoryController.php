<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('subcategories.index', compact('subcategories'));
    }

    public function create()
    {
        return view('subcategories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subcategories|max:255',
        ]);

        Subcategory::create($request->all());

        return redirect()->route('subcategories.index')
                         ->with('success','Subcategory created successfully');
    }

    public function edit(Subcategory $subcategory)
    {
        return view('subcategories.edit', compact('subcategory'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required|unique:subcategories,name,'.$subcategory->id.'|max:255',
        ]);

        $subcategory->update($request->all());

        return redirect()->route('subcategories.index')
                         ->with('success','Subcategory updated successfully');
    }

    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategories.index')
                         ->with('success','Subcategory deleted successfully');
    }
}
