@extends('layouts.profile')

@section('form')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profile</p>

                    </div>
                </div>
                <form action="{{route('user.update', [Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf

                        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


                        <p class="text-uppercase text-sm">User Information</p>
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" value="lucky.jesse" >
                                </div>
                            </div>-->
                            <div class="col-md-12 justify-content-center">
                                <div class="form-group text-center">
                                    <label for="img" class="form-control-label"><img src="../../../{{$user->user_img}}"
                                            alt="img" style="cursor:pointer;"></label>
                                    <input class="form-control" type="file" hidden id="img" name="user_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">First name</label>
                                    <input class="form-control" type="text" value="{{$user->first_name}}"
                                        name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Last name</label>
                                    <input class="form-control" type="text" value="{{$user->last_name}}"
                                        name="last_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="gender" class="form-control-label d-block">Gender</label>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" value="male" class="me-8"> <span>
                                    </span>
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female" value="female" class="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="role" class="form-control-label">Role</label>
                                    <select name="role" id="user_role" class="form-control">
                                        <option value="customer" selected>Customer</option>
                                        <option value="seller" selected>Seller</option>
                                        <option value="admin" selected>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthday" class="form-control-label">Birthdate</label>
                                    <input type="date" id="birthday" name="birthday" class="form-control"
                                        value="{{$user->birthday}}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address</label>
                                    <input class="form-control" type="text" name="address" value="{{$user->address}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Phone number</label>
                                    <input class="form-control" type="text" value="{{$user->phone_number}}"
                                        name="phone_number">
                                </div>
                            </div>
                         
                        </div>
                        <button type="submit"
                                class="btn bg-gradient-warning btn-sm ms-auto form-control w-50 text-center">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection