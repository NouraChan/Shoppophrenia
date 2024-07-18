@extends('layouts.dashboard')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Edit Announcement</h6>
                </div>
                <div class="card-body px-4 pt-3 pb-2">
                    <form action="{{route('announcement.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="form-control-label">Title</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="product_img" class="form-control-label"><img class="mt-4"
                                            src="{{asset('img/add-image.png')}}" alt="img"
                                            style="width:50px; cursor:pointer;"></label>
                                    <input class="form-control" type="file" name="product_img" hidden id="product_img">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="example-text-input" class="form-control-label">Content</label>
                                    <textarea class="form-control" name="description" style="resize:none;" rows="5"></textarea>
                                </div>
                                <button class="form-control btn bghalf me-3 w-10 text-nowrap text-white align-end"
                                    type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>





@endsection