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
      <th scope="col">email</th>
      
    </tr>
  </thead>
  <tbody>
 
  @if ($sellers)
    @foreach ($sellers as $seller)
    <tr>
      <th scope="row">{{ $seller->id }}</th>
      <td>{{ $seller->name }}</td>
      <td>{{ $seller->email }}</td>


      <td> 
      <button onclick="editProduct('{{ $seller->id }}')" class="btn btn-primary">edit</button> 
      <button onclick="viewProduct('{{ $seller->id }}')"  class="btn btn-success">view</button> 
      <button onclick="deleteProduct('{{ $seller->id }}')" class="btn btn-danger">delete</button>  
    </td>
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
