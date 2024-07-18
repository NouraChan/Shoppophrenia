@extends('layouts.layout')

@section('content')

<div class="container py-5">
    <div class="table-responsive" style="padding-top:200px;">
        <div class="col-md-12">
            <h4>Results</h4>
            <div class="table-responsive mt-10">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Desciption</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td style="height : 75px; padding: 20px 20px" class="">
                                    <p class="my-auto">
                                        <img src="{{asset($result->product_img)}}" class="img-fluid" alt="" style="height:70px; width:50px;"></a></p>
                                </td>
                                <td style="height : 75px; padding: 20px 20px" class="">
                                    <p class="my-auto">{{$result->name}}</p>
                                </td>
                                <td style="height : 75px; padding: 20px 20px" class="">
                                    <p class="my-auto">{{$result->description}}</p>
                                </td>
                                <td style="height : 75px; padding: 20px 20px" class="">
                                    <p class="my-auto"><a href="{{route('product.add', ['id' => $result->id])}}"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a></p>
                                </td>
                                <td style="height : 75px; padding: 20px 20px" class="">
                                    <p class="my-auto"><a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-heart me-2 text-primary"></i> Add to
                                            wishlist</a></p>
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