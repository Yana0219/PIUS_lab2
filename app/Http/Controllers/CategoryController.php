<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Banner;

public function show($code)
{
    $category = Category::where('code', $code)->firstOrFail();

    if (!$category->active) {
        abort(404);
    }

    $banners = Banner::where('category_id', $category->id)
        ->where('active', true)
        ->where('active_from', '<=', now())
        ->where('active_to', '>=', now())
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

    return view('category.show', compact('category', 'banners'));
}
