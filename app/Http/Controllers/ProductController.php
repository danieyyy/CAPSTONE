<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warehouse;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $products = Product::all()->sortBy('updated_at')->reverse()->values();
       return view('product.index', compact('products'));
     
    }

    public function create()
    {
        $all_warehouse = Warehouse::all();

        return view('product.create', compact('all_warehouse'));
    }   


    public function store(Request $request)
    {
        //validation
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'category' => 'required',
            'color' => 'required',
            'size' => 'required|int',
        ]);

        if ($validated) {

        $product = null;

            if ( isset($request->product_id) == false ) {
                //saving process new product
                $product = new Product;
                $product->created_by = Auth::user()->id;
                $product->product_name = $request->product_name;
                $product->category = $request->category;
                $product->size = $request->size;
                $product->color = $request->color;
                $product->warehouse_id = $request->warehouse_id;
                $product->save();
    

            } else {

                //editing process, existing product
                $product = Product::find($request->product_id);
                $product->updated_by = Auth::user()->id;
                $product->product_name = $request->product_name;
                $product->category = $request->category;
                $product->size = $request->size;
                $product->color = $request->color;
                $product->warehouse_id = $request->warehouse_id;
                $product->save();
    
            }

         

        return redirect()->route('product_index');

        }
    }

    public function edit($id)
    {
       
       /*
        $result = Product::where('product_name', $id)
        ->where('category',  $category)
        ->where('color', $color)
        ->first();

        echo $result->created_by;

        $result =  Product::where('product_name', $id)
        ->where('category',  $category)
        ->where('color', $color)
        ->get();

        echo $result[0]->created_by;
*/

$product = Product::find($id); //primary key

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        $all_warehouse = Warehouse::all();

        return view('product.create', compact('product', 'all_warehouse'));
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        $product->delete();

        return redirect()->route('product_index');

    }


    public function view($id)
    {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        return view('product.view', compact('product'));

    }
   
}
