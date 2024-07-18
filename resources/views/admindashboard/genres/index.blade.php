@extends('layouts.dashboard')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline headerh6">Genres</h6>
                    <a class="btn btn-primary bghalf me-3 w-10 text-nowrap text-center d-inline mb-4"
                        href="{{route('genre.create')}}">Create</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 mt-5">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                        Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Count</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($genres as $genre)
                                    <tr>
                                        <td class="align-middle px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{$genre->id}}</span>
                                        </td>
                                        <td>
                                            <span class="text-black text-xs font-weight-bold">{{$genre->name}}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$genre->count}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('genre.edit',['id' => $genre->id])}}" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-pencil text-warning" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{route('genre.destroy',['id' => $genre->id])}}" class="text-secondary font-weight-bold text-xs ms-4"
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