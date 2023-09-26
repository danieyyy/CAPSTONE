@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seller {{ __('Product Creation') }}</div>

                <div class="card-body">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif         
              
<form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
    @csrf 


 <div class="mb-3">
  <label for="product_image" class="form-label">Product Image</label>
  
    <input type="file" class="form-control" id="product_image" name="product_image" accept=".jpg,.png,.gif">

  </div>


 <div class="mb-3">
  <label for="product_name" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="product_name" name="product_name" 
  value="{{ $product->product_name  ?? '' }}"
  >
  </div>

 
 <div class="mb-3">
  <label for="size" class="form-label">Size</label>
  <input type="text" class="form-control" id="size" name="size" placeholder=""
  value="{{ $product->size ?? 0 }}"
  >
 </div>

 
 <div class="mb-3">
  <label for="color" class="form-label">Color</label>
  <input type="text" class="form-control" id="color" name="color" placeholder=""
  value="{{ $product->color ?? '' }}"
  >
 </div>


 
 <div class="mb-3">

 <input type="submit" class="btn btn-primary" value="Save">

 <input type="button" onclick="productList()" class="btn btn-danger" value="Cancel">

 </div>


</form>



<script>

  function productList(){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-final/products";
  }

  </script>

              

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
