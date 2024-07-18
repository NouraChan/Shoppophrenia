@extends('layouts.layout')

@section('content')

<div class="container py-5">
    <div class="table-responsive" style="padding-top:200px;">
        <div class="col-md-12">
            <h4>Announcements</h4>
            <div class="table-responsive mt-10">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announ)
                            <a href="{{route('announcement.show' , ['id' => $announ->id])}}">
                                <tr>
                                    <td style="height : 75px; padding: 20px 20px" class="">
                                        <p class="my-auto">
                                            <img src="{{asset($announ->image)}}" class="img-fluid" alt=""
                                                style="height:70px; width:50px;">
                                        </p>
                                    </td>
                                    <td style="height : 75px; padding: 20px 20px" class="">
                                        <p class="my-auto">{{$announ->title}}</p>
                                    </td>
                                </tr>
                            </a>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection