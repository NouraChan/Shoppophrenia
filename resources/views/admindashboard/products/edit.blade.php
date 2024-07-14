@extends('layouts.dashboard')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Edit Product</h6>
                </div>
                <div class="card-body px-4 pt-3 pb-2">
                    <form action="{{route('product.update')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Product Name</label>
                                    <input class="form-control" type="text" name="name">
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