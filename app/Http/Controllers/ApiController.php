<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function products()
    {

        return file_get_contents(storage_path('testing/json/products.json'));
    }

    public function posts()
    {

        return file_get_contents(storage_path('testing/json/posts.json'));
    }
}
