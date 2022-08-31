<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $banners = file_get_contents(storage_path('testing/json/banners.json'));
        $partners = file_get_contents(storage_path('testing/json/partners.json'));

        return view('home.index', compact(
            'banners',
            'partners'
        ));
    }
}
