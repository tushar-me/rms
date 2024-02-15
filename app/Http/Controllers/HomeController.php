<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Client;
use App\Models\Brand;
use App\Models\User;

class HomeController extends Controller
{

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($data)){
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

            return redirect('/login');
    }
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $services = Service::orderBy('created_at', 'desc')->limit(8)->get();
        $clients = Client::orderBy('created_at', 'desc')->get();
        $brands = Brand::orderBy('created_at', 'desc')->get();
        return view('pages.home', compact('products', 'services', 'clients', 'brands'));
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
        $clients = Client::orderBy('updated_at', 'desc')->get();
        return view('pages.client', compact('clients'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
