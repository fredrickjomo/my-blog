@extends('layouts.main')
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

                <h1 class="my-4">Home
                    <small>What's New!</small>
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
                        <a href="#">{{$posts->writer}}</a>&nbsp;
                        <h2 style="color: black;">Share On:</h2>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl())}}"
                           target="_blank"><button class="btn btn-primary">Facebook</button></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank">
                            <button class="btn btn-primary">Twitter</button>
                        </a>
                        <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}" target="_blank">
                            <button class="btn btn-danger">Google</button>
                        </a>
                    </div>
                </div>
                @endforeach


                <script>
                    var popupMeta = {
                        width: 400,
                        height: 400
                    }
                    $(document).on('click', '.social-share', function(event){
                        event.preventDefault();

                        var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
                            hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

                        var url = $(this).attr('href');
                        var popup = window.open(url, 'Social Share',
                            'width='+popupMeta.width+',height='+popupMeta.height+
                            ',left='+vpPsition+',top='+hPosition+
                            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

                        if (popup) {
                            popup.focus();
                            return false;
                        }
                    });
                </script>



                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        {!! $post->links(); !!}
                    </li>

                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <style>
                 .sidebar-widgets{
                     margin-top: 6%;

                }
                .card-header{
                    color: green;
                    text-align: center;

                }
            </style>
            <div class="col-md-4 sidebar-widgets">

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list mb-0">
                                    <li>
                                        <a href="{{route('posts.showCelebrities')}}">Celebrities</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showPolitics')}}">Politics</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showSports')}}">Sports</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showTrends')}}">Trends</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showCampusVibe')}}">Campus Vibe</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list mb-0">
                                    <li>
                                        <a href="{{route('posts.showRelationships')}}">Relationships</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showHealth')}}">Health</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showBettingTips')}}">Betting Tips</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showMovies')}}">Movies</a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.showUnclassified')}}">Unclassified</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Monitor 254</h5>
                    <div class="card-body">
                        <ul>
                            <p><li>Comes with full stories and trending news ranging through sports to unclassified news.</li></p>
                        <p><li>At Monitor 254 we are after informing you of the latest happening in the world above all , Entertaining
                                you with our stories.</li></p>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
