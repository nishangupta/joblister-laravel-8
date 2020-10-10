<?php

namespace App\Http\Controllers;

use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class CompanyCategoryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:5'
        ]);
        CompanyCategory::create([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('account.dashboard');
    }

    public function edit(CompanyCategory $category)
    {
        return view('company-category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|min:5'
        ]);
        CompanyCategory::create([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('account.dashboard');
    }

    public function destroy($id)
    {
        $category = CompanyCategory::find($id);
        $category->delete();
        return redirect()->route('account.dashboard');
    }
}
