@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seller List</div>

                <div class="card-body">

         
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      
    </tr>
  </thead>
  <tbody>
 
  @if ($products)
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->product_name }}</td>
      <td><img src="http://localhost/cfinal/public/{{ $product->product_image }}" alt="" class="img" height="100" width="100"> </td>


    
    </tr>
    @endforeach

  @endif

  </tbody>
</table>

       

                </div>
            </div>
        </div>
    </div>
</div>

<script>

  function editProduct(id){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-final/products/edit/" + id;
  }

  function viewProduct(id){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-final/products/view/" + id;
  }

  function deleteProduct(id){
    if(confirm("Are you sure to delete this product?") == true){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-final/products/delete/" + id;
    } 
  }

  function addProduct(){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-final/products/create";
  }

</script>

@endsection
