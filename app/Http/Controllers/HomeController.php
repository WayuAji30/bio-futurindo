<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'testimoni_chunk' => Testimoni::inRandomOrder()->get()->chunk(3),
            'testimoni' => Testimoni::all(),
        ];

        return view('home.index', $data);
    }

    public function Services(Request $request)
    {
        $data = [
            'portfolio_chunk' => Portfolio::inRandomOrder()->get()->chunk(3),
            'portfolio' => Portfolio::all(),
            'services' => Service::all(),
        ];

        return view('home.services', $data);
    }
}
