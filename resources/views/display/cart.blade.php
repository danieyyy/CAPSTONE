
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products Confirmation') }}</div>
                    <div id="sample"></div>
                <div class="card-body">

                
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">category</th>
      <th scope="col">size</th>
      <th scope="col">color</th>
    </tr>
  </thead>
  <tbody>
 
  @if ($products)
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{ $product->id }} - {{ $product->email }}</th>
      <td>{{ $product->product_name }}  </td>
      <td>{{ $product->category }}</td>
      <td>{{ $product->size }}</td>
      <td>{{ $product->color }}</td>

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
@endsection
