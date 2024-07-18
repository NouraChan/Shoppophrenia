@extends('layout')

@section('content')

<div class="col-md-12 col-lg-10 col-xl-10">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Products</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $hash => $item)

                    <tr>
                        <th scope="row">
                            <div class="d-flex align-items-center mt-2">
                                <img src="{{asset($item->options->product_img)}}" class="img-fluid rounded-circle"
                                    style="width: 90px; height: 90px;" alt="">
                            </div>
                        </th>
                        <td class="py-5">{{$item->name}}</td>
                        <td class="py-5">{{$item->price}}</td>
                        <td class="py-5">{{$item->quantity}}</td>
                        <td class="py-5">{{$item->total_price}}</td>
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">
                    </th>
                    <td class="py-5"></td>
                    <td class="py-5"></td>
                    <td class="py-5">
                        <p class="mb-0 text-dark py-3">Subtotal</p>
                    </td>
                    <td class="py-5">
                        <div class="py-3 border-bottom border-top">
                            <p class="mb-0 text-dark">$414.00</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                    </th>
                    <td class="py-5">
                        <p class="mb-0 text-dark py-4">Shipping</p>
                    </td>
                    <td colspan="3" class="py-5">
                        <div class="form-check text-start">
                            <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-1"
                                name="Shipping-1" value="Shipping">
                            <label class="form-check-label" for="Shipping-1">Free Shipping</label>
                        </div>
                        <div class="form-check text-start">
                            <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-2"
                                name="Shipping-1" value="Shipping">
                            <label class="form-check-label" for="Shipping-2">Flat rate: $15.00</label>
                        </div>
                        <div class="form-check text-start">
                            <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-3"
                                name="Shipping-1" value="Shipping">
                            <label class="form-check-label" for="Shipping-3">Local Pickup: $8.00</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                    </th>
                    <td class="py-5">
                        <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                    </td>
                    <td class="py-5"></td>
                    <td class="py-5"></td>
                    <td class="py-5">
                        <div class="py-3 border-bottom border-top">
                            <p class="mb-0 text-dark">$135.00</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
        <div class="col-12">
            <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Transfer-1" name="Transfer"
                    value="Transfer">
                <label class="form-check-label" for="Transfer-1">Direct Bank Transfer</label>
            </div>
            <p class="text-start text-dark">Make your payment directly into our bank account. Please use your Order ID
                as the payment reference. Your order will not be shipped until the funds have cleared in our account.
            </p>
        </div>
    </div>
    <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
        <div class="col-12">
            <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Payments-1" name="Payments"
                    value="Payments">
                <label class="form-check-label" for="Payments-1">Check Payments</label>
            </div>
        </div>
    </div>
    <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
        <div class="col-12">
            <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Delivery-1" name="Delivery"
                    value="Delivery">
                <label class="form-check-label" for="Delivery-1">Cash On Delivery</label>
            </div>
        </div>
    </div>
    <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
        <div class="col-12">
            <div class="form-check text-start my-3">
                <input type="checkbox" class="form-check-input bg-primary border-0" id="Paypal-1" name="Paypal"
                    value="Paypal">
                <label class="form-check-label" for="Paypal-1">Paypal</label>
            </div>
        </div>
    </div>
    <div class="row g-4 text-center align-items-center justify-content-center pt-4">
        <button type="button" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place
            Order</button>
    </div>
</div>

@endsection