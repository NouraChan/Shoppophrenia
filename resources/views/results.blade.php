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
                @foreach ($results as $result)
                
                @endforeach
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center mt-2">
                            <img src="" class="img-fluid rounded-circle"
                                style="width: 90px; height: 90px;" alt="">
                        </div>
                    </th>
                    <td class="py-5">Awesome Brocoli</td>
                    <td class="py-5">$69.00</td>
                    <td class="py-5">2</td>
                    <td class="py-5">$138.00</td>
                </tr>
            </tbody>
        </table>
    </div>


    @endsection