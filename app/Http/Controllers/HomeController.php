<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $services = Service::orderBy('created_at', 'desc')->limit(8)->get();
        return view('pages.home', compact('products', 'services'));
    }

    public function ourTeam()
    {
        return view('pages.team');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('pages.services', compact('services'));
    }
    public function client()
    {
        return view('pages.client');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
