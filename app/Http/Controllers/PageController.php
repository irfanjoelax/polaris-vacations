<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        return view('pages.destination', [
            'category' => Category::with('pakets')->where('slug', $slug)->first()
        ]);
    }
}
