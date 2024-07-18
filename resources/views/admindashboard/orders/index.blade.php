@extends('layouts.dashboard')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Orders</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 mt-5">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Items</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                        Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Grand Total</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Payment</th>
                                   

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>

                                        <td class="align-middle px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{$product->id}}</span>
                                        </td>
                                        <td class="align-middle px-4">
                                         <img src="{{asset($product->product_img)}}" alt="" style="width:100px; height:150px;">
                                        </td>
                                        <td>
                                            <span class="text-black text-xs font-weight-bold">{{$product->name}}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$product->description}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$product->stock}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$product->price}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$product->rate}}</span>
                                        </td>
                                        <td class="align-middle">
               
                                            <a href="{{route('product.destroy',['id' => $product->id])}}" class="text-secondary font-weight-bold text-xs ms-4"
                                                data-toggle="tooltip" data-original-title="Delete user">
                                                <i class="fa fa-trash text-warning" aria-hidden="true"></i>
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