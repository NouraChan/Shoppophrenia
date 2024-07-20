@extends('layouts.dashboard')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Announcements</h6>
                    <a class="btn btn-primary bghalf me-3 w-10 text-nowrap text-center d-inline mb-4"
                        href="{{route('announcement.create')}}">Create</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 mt-5">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Image</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                        Content</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcements as $announcement)
                                    <tr>

                                        <td class="align-middle px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{$announcement->id}}</span>
                                        </td>
                                        <td class="align-middle px-4">
                                            <img src="{{asset($announcement->announcement_img)}}" alt=""
                                                style="width:100px; height:150px;">
                                        </td>
                                        <td>
                                            <span class="text-black text-xs font-weight-bold">{{$announcement->name}}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$announcement->description}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$announcement->stock}}</span>
                                        </td>
                                        
                                        <td class="align-middle">
                                            <a href="{{route('announcement.edit', ['id' => $announcement->id])}}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                <i class="fa fa-pencil text-warning" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{route('announcement.destroy', ['id' => $announcement->id])}}"
                                                class="text-secondary font-weight-bold text-xs ms-4" data-toggle="tooltip"
                                                data-original-title="Delete user">
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