@extends('layouts.main')
<title>Relationships</title>
@section('content')
    <style>
        .card img{
            height:300px;
        }
    </style>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Relationships! :
                    <small>News and trends?</small>
                </h1>

                <!-- Blog Post -->
                @foreach($post as $posts)
                    <div class="card mb-4">
                        <img class="card-img-top" src="/images/posts_caption/{{$posts->photo}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$posts->title}}</h2>
                            <p class="card-text">{{str_limit(strip_tags($posts->description),80)}}
                                @if(strlen(strip_tags($posts->description))>80)
                                    <a href="{{route('posts.show',$posts->id)}}" class="btn btn-primary">Read More &rarr;</a>
                                @endif
                            </p>

                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{date('j-M-Y',strtotime( $posts->created_at))}} by
                            <a href="#">{{$posts->writer}}</a>
                        </div>
                    </div>
            @endforeach



            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        {{--{!! $post->links(); !!}--}}
                    </li>

                </ul>

            </div>



        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection