@extends('frontend.master')
@section('content')


<div class="container mt-5">
{{-- <section class="h-100 h-custom" style="background-color: #eee;"> --}}
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
              <div class="row">
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
  
                @if ($cartData!=null)
                @foreach ($cartData as $key=>$cart)

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="{{url('uploads/products/'.$cart['image'])}}"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">{{$cart['name']}}</h5>
                      {{-- <h6 style="color: #9e9e9e;">Color: white</h6> --}}
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">{{$cart['price']}}</p>
                        <div class="def-number-input number-input safari_only">
                          {{-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button> --}}
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="{{$cart['quantity']}}"
                            type="number">
                          {{-- <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button> --}}
                        </div>
                      </div>
                    </div>
                    <!-- Add Subtotal Column Here -->
                    <div class="ms-auto text-end">
                        <ul><h5 class="text-primary">Subtotal</h5><a href="{{Route('remove.item',$key)}}" type="button" class="plus">x</a></ul>
                      <p class="fw-bold mb-0">{{$cart['price'] * $cart['quantity']}}</p>
                    </div>
                  </div>
                  
                @endforeach
                @endif
  
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
  
                  <div class="d-flex justify-content-between px-x">
                    {{-- <p class="fw-bold">Discount:</p> --}}
                    {{-- <p class="fw-bold">95$</p> --}}
                  </div>
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <p class="fw-bold mb-0">{{$cartData?array_sum(array_column($cartData,'sub_total')):0}}</p>
                  </div>
  
                </div>
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>
  
                  <form class="mb-5">
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        value="" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        value="" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>
  
                    <div class="row">
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="text" id="typeExp" class="form-control form-control-lg" value=""
                            size="7" id="exp" minlength="7" maxlength="7" />
                          <label class="form-label" for="typeExp">Expiration</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="password" id="typeText" class="form-control form-control-lg"
                            value="" size="1" minlength="3" maxlength="3" />
                          <label class="form-label" for="typeText">Cvv</label>
                        </div>
                      </div>
                    </div>
  
                    {{-- <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                        href="#!">obcaecati sapiente</a>.</p> --}}
  
                    <button type="button" class="form-group button">Buy now</button>
                    {{-- <a href="index.html" class="form-group button">Buy Now</a> --}}
                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                      <a href="{{Route('frontend.product')}}"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                    </h5>
  
                  </form>
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


  <style>


@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.number-input input[type="number"] {
-webkit-appearance: textfield;
-moz-appearance: textfield;
appearance: textfield;
}

.number-input input[type=number]::-webkit-inner-spin-button,
.number-input input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
}

.number-input button {
-webkit-appearance: none;
background-color: transparent;
border: none;
align-items: center;
justify-content: center;
cursor: pointer;
margin: 0;
position: relative;
}

.number-input button:before,
.number-input button:after {
display: inline-block;
position: absolute;
content: '';
height: 2px;
transform: translate(-50%, -50%);
}

.number-input button.plus:after {
transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
text-align: center;
}

.number-input.number-input {
border: 1px solid #ced4da;
width: 10rem;
border-radius: .25rem;
}

.number-input.number-input button {
width: 2.6rem;
height: .7rem;
}

.number-input.number-input button.minus {
padding-left: 10px;
}

.number-input.number-input button:before,
.number-input.number-input button:after {
width: .7rem;
background-color: #495057;
}

.number-input.number-input input[type=number] {
max-width: 4rem;
padding: .5rem;
border: 1px solid #ced4da;
border-width: 0 1px;
font-size: 1rem;
height: 2rem;
color: #495057;
}

@media not all and (min-resolution:.001dpcm) {
@supports (-webkit-appearance: none) and (stroke-color:transparent) {

.number-input.def-number-input.safari_only button:before,
.number-input.def-number-input.safari_only button:after {
margin-top: -.3rem;
}
}
}

.shopping-cart .def-number-input.number-input {
border: none;
}

.shopping-cart .def-number-input.number-input input[type=number] {
max-width: 2rem;
border: none;
}

.shopping-cart .def-number-input.number-input input[type=number].black-text,
.shopping-cart .def-number-input.number-input input.btn.btn-link[type=number],
.shopping-cart .def-number-input.number-input input.md-toast-close-button[type=number]:hover,
.shopping-cart .def-number-input.number-input input.md-toast-close-button[type=number]:focus {
color: #212529 !important;
}

.shopping-cart .def-number-input.number-input button {
width: 1rem;
}

.shopping-cart .def-number-input.number-input button:before,
.shopping-cart .def-number-input.number-input button:after {
width: .5rem;
}

.shopping-cart .def-number-input.number-input button.minus:before,
.shopping-cart .def-number-input.number-input button.minus:after {
background-color: #9e9e9e;
}

.shopping-cart .def-number-input.number-input button.plus:before,
.shopping-cart .def-number-input.number-input button.plus:after {
background-color: #4285f4;
}
  </style>













      
@endsection