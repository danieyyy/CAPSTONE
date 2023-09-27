
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Creation') }}</div>

                <div class="card-body">

                <ul class="list-group">
  <li class="list-group-item">Product Name : {{ $product->product_name ?? '' }}</li>
  <li class="list-group-item">Category : {{ $product->cateory ?? '' }}</li>
 </ul>


 
 <input type="button" onclick="productList()" class="btn btn-danger" value="Cancel">


 
<script>

function productList(){
  window.location.href = "<?php echo env('APP_URL'); ?>/capstone/products";
}

</script>
              

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
