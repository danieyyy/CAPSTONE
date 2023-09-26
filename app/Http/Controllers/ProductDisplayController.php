<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\Cart;

class ProductDisplayController extends Controller
{
    public $pItems = array();
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(){

       $products = Product::all();
       
       return view('display.list', compact('products'));

    }


    public function selectedItems(Request $request)
    {
        $ok = Cart::create([
            'customer_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'status' => 1,
        ]);

        if($ok){
            $numOfItems = Cart::where('customer_id', Auth::user()->id)->count();
            echo "added to cart, number of items are: " . $numOfItems;
        }

    }

    public function cart(){
        
        $products = Cart::join('products', 'cart.product_id', '=', 'products.id')
            ->join('users', 'cart.customer_id', '=', 'users.id')
            ->where('cart.customer_id', Auth::user()->id)
            ->where('cart.status', 1)
            ->get();

        return view('display.cart', compact('products'));  

    }

}
