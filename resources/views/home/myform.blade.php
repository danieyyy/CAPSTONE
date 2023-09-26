@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<?php echo $test; ?>


<?php echo '<br>'; ?>

<?php print_r($arr); ?>
<br />
                <div class="card-header">Form Sample</div>

Test with blade: {{ $test }}
<br />


@foreach($arr as $a)
    {{ $a }}  <br />
@endforeach




<form>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
