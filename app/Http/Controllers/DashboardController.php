<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all()->count();
        $services = Product::all()->count();
        $clients = Product::all()->count();
        return view('dashboard.index', compact('products', 'clients', 'services'));
    }

//  Product Methods
    public function showProduct()
    {

        $products = Product::orderBy('created_at', 'desc')->get();
        return view('dashboard.product', compact('products'));
    }
    public function addProduct()
    {
        return view('dashboard.add-product');
    }
    public function storeProduct(Request $request)
    {
        $image = time(). ".".$request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $image);
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = $image;
        $product->save();

        return to_route('dashboard.products');
    }
    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('dashboard.edit-product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if($request->file('image') != null){
            $image = time(). ".".$request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $image);
            $product->image = $image;
        }
        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();

        return to_route('dashboard.products');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $imagePath = public_path('uploads/' . $product->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $product->delete();
        return redirect()->back();
    }

//    Services Methods

    public function showServices()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('dashboard.services', compact('services'));
    }
    public function addServices()
    {
        return view('dashboard.add-service');
    }
    public function storeServices(Request $request)
    {
        $image = time(). ".".$request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $image);
        $service = new Service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->image = $image;
        $service->save();

        return to_route('dashboard.services');
    }
    public function editService($id)
    {
        $service = Service::where('id', $id)->first();
        return view('dashboard.edit-service', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::where('id', $id)->first();
        if($request->file('image')){
            $image = time(). ".".$request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $image);
            $service->image = $image;
        }

        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return to_route('dashboard.services');
    }

    public function deleteService($id)
    {
        $service = Service::where('id', $id)->first();
        $imagePath = public_path('uploads/' . $service->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $service->delete();
        return redirect()->back();
    }

    //    Clients Methods

    public function showClient()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        return view('dashboard.clients', compact('clients'));
    }
    public function addClient()
    {
        return view('dashboard.add-client');
    }
    public function storeClient(Request $request)
    {
        $image = time(). ".".$request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $image);
        $client= new Client;
        $client->title = $request->title;
        $client->image = $image;
        $client->save();

        return to_route('dashboard.clients');
    }
    public function editClient($id)
    {
        $client = Client::where('id', $id)->first();
        return view('dashboard.edit-client', compact('client'));
    }

    public function updateClient(Request $request, $id)
    {
        $client = Client::where('id', $id)->first();
        if($request->file('image')){
            $image = time(). ".".$request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $image);
            $client->image = $image;
        }
        $client->title = $request->title;
        $client->save();

        return to_route('dashboard.clients');
    }

    public function deleteClient($id)
    {
        $client = Client::where('id', $id)->first();
        $imagePath = public_path('uploads/' . $client->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $client->delete();
        return redirect()->back();
    }

//    Brand Methods
    public function showBrand()
    {
        $brands = Brand::orderBy('created_at', 'desc')->get();
        return view('dashboard.brands', compact('brands'));
    }
    public function addBrand()
    {
        return view('dashboard.add-brand');
    }
    public function storeBrand(Request $request)
    {
        $image = time(). ".".$request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $image);
        $brand= new Brand;
        $brand->title = $request->title;
        $brand->image = $image;
        $brand->save();

        return to_route('dashboard.brands');
    }
    public function editBrand($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('dashboard.edit-brand', compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        $brand = Brand::where('id', $id)->first();
        if($request->file('image')){
            $image = time(). ".".$request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $image);
            $brand->image = $image;
        }
        $brand->title = $request->title;
        $brand->save();

        return to_route('dashboard.brands');
    }

    public function deleteBrand($id)
    {
        $brand = Brand::where('id', $id)->first();
        $imagePath = public_path('uploads/' . $brnad->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $brand->delete();
        return redirect()->back();
    }
}
