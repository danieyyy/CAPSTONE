@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Creation') }}</div>

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
              
<form action="{{ route('product_store') }}" method="POST">
    @csrf 

@if(isset($product))   
 <input type="hidden" name="product_id" value="{{ $product->id }} ">
@endif

 <div class="mb-3">
  <label for="product_name" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="product_name" name="product_name" 
  value="{{ $product->product_name  ?? '' }}"
  >
  </div>

  <div class="mb-3">
  <label for="category" class="form-label">Category</label>
  <input type="text" class="form-control" id="category" name="category" placeholder=""
  value="{{ $product->category ?? '' }}">
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
  <label for="color" class="form-label">Warehouse</label>

<select class="form-select" aria-label="Default select example" name="warehouse_id">
     <?php if ($all_warehouse) { ?>
        <?php foreach($all_warehouse as $ware) {   

            if ( isset($product->warehouse_id) && $ware->id == $product->warehouse_id ) { ?>
            <option value="<?php echo $ware->id; ?>" selected> <?php echo $ware->name; ?> </option>
            <?php } else { ?> 
            <option value="<?php echo $ware->id; ?>"> <?php echo $ware->name; ?> </option>

     <?php } 
        }
    } ?>    
</select>    


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
