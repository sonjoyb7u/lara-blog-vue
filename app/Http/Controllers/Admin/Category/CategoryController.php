<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index() {
        $data['categories'] = Category::where('status', Category::ACTIVE_STATUS)->latest()->get();
//        dd($categories);
        return view('admin.pages.category.index', $data);
    }

    public function create() {

    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
