
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products Display') }}</div>
                    <div id="sample"></div>
                <div class="card-body">


@foreach($products as $product)

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> {{ $product->product_name }}</h5>
    <p class="card-text"> {{$product->color }}, {{ $product->category }} </p>

    <a href="#" class="btn btn-primary" id="buyMe" onclick="buy('{{ $product->id }}')"> Buy Me</a>
  </div>
</div>
<br />

@endforeach


<a href="#" class="btn btn-success" id="checkoput">Proceed to Checkout </a>


<script>

function buy(pid)
{

    $.post("<?php echo env('APP_URL'); ?>/capstone-final/display/selected",
    {
        product_id: pid,
        _token: "{{ csrf_token() }}",
    },
    function(data, status){
        $("#sample").html(data);
    });

}

</script>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
