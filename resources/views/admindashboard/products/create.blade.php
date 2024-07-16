@extends('layouts.dashboard')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Create Product</h6>
                </div>
                <div class="card-body px-4 pt-3 pb-2">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="form-control-label">Product Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="genre" class="form-control-label">Genre</label>
                                    <select name="genre_id" id="genre" class="form-control">
                                        <option value="" disabled selected>Select...</option>
                                        @foreach ($genres as $genre)
                                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="stock" class="form-control-label">Stock</label>
                                    <input class="form-control" type="text" name="stock">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="price" class="form-control-label">Price <span
                                            class="text-secondary opacity-5">($)</span></label>
                                    <input class="form-control" type="text" name="price">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="product_img" class="form-control-label"><img class="mt-4"
                                            src="{{asset('img/add-image.png')}}" alt="img"
                                            style="width:50px; cursor:pointer;"></label>
                                    <input class="form-control" type="file" name="product_img" hidden id="product_img">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="example-text-input" class="form-control-label">Description</label>
                                    <textarea class="form-control" name="description" style="resize:none;" rows="5"></textarea>
                                </div>
                                <button class="form-control btn bghalf me-3 w-10 text-nowrap text-white align-end"
                                    type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>





@endsection