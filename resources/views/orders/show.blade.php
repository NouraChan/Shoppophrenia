@extends('layouts.dashboard')

@section('content')

<div class="row mt-4">
    <div class="col-lg-8 mb-lg-0 mb-4">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">My Orders</h6>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center ">
                    <thead>
                        <tr>
                            <td class="w-30">
                                <div class="text-center">
                                    <h6 class="text-sm mb-0">Order No.</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <h6 class="text-sm mb-0">Address</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <h6 class="text-sm mb-0">Amount</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0">Payment Method</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0">Arrives on</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0">Status</h6>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order) 
                            <tr>
                                <td class="w-30">
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0"></h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">{{$order->address}} {{$order->city}} {{$order->country}}
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">{{$order->total_price}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$order->method}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$order->shpiment_date}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$order->status}}</h6>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection