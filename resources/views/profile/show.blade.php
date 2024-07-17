@extends('layouts.profile')

@section('form')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profile</p>
                        <a class="btn btn-primary btn-sm ms-auto"
                            href="{{route('user.edit', [Auth::user()->id])}}">Edit</a>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="card-body">

                        <p class="text-uppercase text-sm">User Information</p>
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" value="lucky.jesse" readonly>
                                </div>
                            </div>-->
                            <div class="col-md-12 justify-content-center">
                                <div class="form-group text-center">
                                    <label for="img" class="form-control-label"><img src="../../{{$user->user_img}}" alt="img" style="cursor:pointer;"></label>
                                    <input class="form-control" type="file" readonly hidden id="img" name="user_img" readonly disabled>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">First name</label>
                                    <input class="form-control" type="text" value="{{$user->first_name}}" readonly name="first_name" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Last name</label>
                                    <input class="form-control" type="text" value="{{$user->last_name}}" readonly name="last_name" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="gender" class="form-control-label d-block">Gender</label>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" value="male" class="me-8" disabled> <span> </span>
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female" value="female" class="" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="role" class="form-control-label">Role</label>
                                    <select name="role" id="user_role" readonly class="form-control" disabled>
                                        <option value="customer" selected>Customer</option>
                                        <option value="seller" selected>Seller</option>
                                        <option value="admin" selected>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthday" class="form-control-label">Birthdate</label>
                                  <input type="date" id="birthday" name="birthday" disabled class="form-control" readonly value="{{$user->birthday}}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address</label>
                                    <input class="form-control" type="text" name="address"readonly
                                        value="{{$user->address}}" disabled>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Phone number</label>
                                    <input class="form-control" type="text" value="{{$user->phone_number}}" name="phone_number" readonly disabled>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">About me</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">About me</label>
                                    <input class="form-control" type="text"
                                        value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection