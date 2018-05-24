@extends('layouts.admin')
@section('header')
    Posts currently uploaded
    @endsection
@section('page-icon')
    <i class="fa fa-list"></i>
    @endsection
@section('content')
    <style>
        .container{
            margin-top:3%;
        //margin-bottom: 20%;
        }
        .container table{
            margin-bottom: 20%;
            background-color: #0f0f0f;
            color: #ffffff;
        }
        .container h2{
            padding-bottom: 10px;
            color: #1b1e21;
        }
        .container img{
            height: 80px;
            width: 80px;
            border-radius: 10px;
        }
        table tr{
            padding: 0;
            margin: 0 auto;
        }
        .container .profile{
            height: 80px;
            width: 80px;
        }
        .col-12 h2{
            font-size: 17px;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <table class="col-12 table table-dark table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No:</th>
                        <th>Post Caption</th>
                        <th>Post Title</th>
                        <th>Post Description</th>
                        <th>Date/Time Posted</th>



                    </tr>
                    </thead>
                    <tbody>

                    @foreach($post as $posts)
                        <tr>

                            <td>{{$users++}}</td>
                            <td class="profile"><img src="{{asset($posts->photo)}}" alt="Photo"></td>
                            <td>{{$posts->title}}</td>
                            <td>{{$posts->description}}</td>
                            <td>{{$posts->created_at}}</td>


                        </tr>

                    @endforeach


                    </tbody>
                </table>

            </div>

        </div>


    </div>



@endsection