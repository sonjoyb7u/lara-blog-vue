<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;



class CategoryController extends Controller
{
    public function index() {
        $data['categories'] = Category::where('status', Category::ACTIVE_STATUS)->latest()->get();
//        dd($data);
        return view('admin.pages.category.index', $data);
    }


    public function store(Request $req) {
        if($req->isMethod('POST')) {
            $this->validate($req, [
                'name' => 'required|unique:categories|string|max:20',
                'status' => 'required',
            ], $message = [
                'name.required' => 'Category Name is required!',
                'name.string' => 'Category Name must be Alpabetic name!',
                'name.unique' => 'Category Name is already been taken!',
                'name.max' => 'Category Name must be 20 Character\'s',
                'status.required' => 'Status field is required!',
            ]);
            $name = $req->name;
            $slug = Str::slug($name);
            $status = $req->status;

            try {
                $add = Category::create([
                    'name' => $name,
                    'slug' => $slug,
                    'status' => $status,
                ]);
                if($add->count() > 0) {
                    return "Category added successfully.";
                } else {
                    return "Something went wrong!";
                }

            } catch(Exception $e) {
                return "Error : " . $e->getMessage();
            }

        }

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
