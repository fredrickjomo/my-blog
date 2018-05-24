@extends('layouts.main')
@section('content')
    <style>
        .read-content{
            margin:0 auto;
        }
        .card img{
            height:350px;
        }
    </style>

    <!-- Page Content -->
    <div class="container read-content">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">{{$post->category}}:&nbsp;
                    <small>{{$post->title}}</small>
                </h1>

                <!-- Blog Post -->

                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset($post->photo)}}" alt="Post image">
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <p class="card-text">{{$post->description}}

                            </p>

                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{$post->created_at}} by
                            <a href="#">{{$post->writer}}</a>
                        </div>
                    </div>




            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="{{url('/')}}">&larr; Back</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next &rarr;</a>
                    </li>
                </ul>

            </div>



        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection