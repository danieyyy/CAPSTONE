<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\SellerStore;

class SellerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    
    public function create()
    { 
        return view('seller.create');
    }

    public function store(Request $request)
    { 
         //validation
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

       if ($validated) { 
       
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fk_user_type_id' => 4]);

            return redirect()->route('seller_list');

       }


    }

    public function list()
    {
        $sellers = User::where('fk_user_type_id', 4)->get();
        return view('seller.list', compact('sellers'));
    }

    
    public function createProductForm()
    {
        return view('seller.product_form');
    }

    public function storeProduct(Request $request)
    {
       $fileName = Auth::user()->id.'_'.time().'_'.'.'.$request->product_image->extension();
       //$type = $request->product_image->getMimeType();
       //$size = $request->product_image->getSize();
     
       $request->product_image->move(public_path('/uploads'), $fileName);
        
        SellerStore::create([
            'fk_seller_id' => Auth::user()->id,
            'product_image' => '/uploads/'.$fileName,
            'product_name' => $request->product_name,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'created_at' => date('Y-m-d H:i:s')
            ]);
            
    }

    public function productList()
    {
        //echo Auth::user()->id;

        $products = SellerStore::where('fk_seller_id', Auth::user()->id)->get();
        return view('seller.productlist', compact('products'));

    }


   
}
