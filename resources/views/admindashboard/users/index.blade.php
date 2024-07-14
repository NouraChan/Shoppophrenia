@extends('admindashboard.users')

@section('datashow')

<div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">User</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order History</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                <th class="text-secondary opacity-7"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $users as $user )
             <tr>
                <td class="align-middle px-4">
                    <span class="text-secondary text-xs font-weight-bold">{{$user->id}}</span>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->username}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0 ms-4 text-secondary text-xs"><a href="">Click here</a>
                    </p>
                </td>
                <td class="align-middle text-sm px-3">
                    <span class="text-secondary text-xs font-weight-bold">{{$user->role}}</span>
                </td>
                <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                        data-original-title="Edit user">
                        Edit
                    </a>
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs ms-4" data-toggle="tooltip"
                        data-original-title="Edit user">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
      
        </tbody>
    </table>
</div>

@endsection