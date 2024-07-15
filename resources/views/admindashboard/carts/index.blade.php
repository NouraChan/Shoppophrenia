@extends('layouts.dashboard')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Carts</h6>
                    <a class="btn btn-primary bghalf me-3 w-10 text-nowrap text-center d-inline mb-4"
                        href="{{route('cart.create')}}">Create</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id
                                    </th> 
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Image</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                        Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Quantity</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price</th>
                                      
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                    <td class="align-middle px-4">
                                            <span class="text-secondary text-xs font-weight-bold"><img src="{{$cart->cart_img}}" alt="" style="width:100;"></span>
                                        </td>
                                        <td class="align-middle px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->id}}</span>
                                        </td>
                                        <td>
                                            <span class="text-black text-xs font-weight-bold">{{$cart->name}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->description}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->stock}}</span>
                                        </td> 
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->price}}</span>
                                        </td> 
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->rate}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$cart->genre_id}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Delete user">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection