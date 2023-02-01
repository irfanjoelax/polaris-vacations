<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = [
            ['image' => 'img/TURKEY.jpeg'],
            ['image' => 'img/EUROPE.jpeg'],
            ['image' => 'img/BALI.jpeg'],
            ['image' => 'img/CYCLING.jpeg'],
        ];

        $specialOffer = Paket::where('special_offer', true)->get();

        $umrah = Paket::whereHas('category', function ($query) {
            return $query->where('name', 'like', '%umrah%');
        })->get();

        return view('pages.welcome', compact([
            'specialOffer',
            'umrah',
            'sliders',
        ]));
    }
}
