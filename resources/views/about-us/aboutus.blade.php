@extends('layouts.main')
<title>About us</title>
@section('content')

    <link rel="stylesheet" href="css/mycss/aboutus.css">
    <div class="container-fluid mycarousel">
        <div class="row">
            <div class="col-md-12">
                <div id="slideIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slideIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#slideIndicators" data-slide-to="1"></li>
                        <li data-target="#slideIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/arsenal.jpg')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Sports</h4>
                                <p>We got your sports news covered</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../KOIMS/images/image_slider/image2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Celebrities</h4>
                                <p>Here is the latest</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/politics.jpg')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Politics</h4>
                                <p>welcome home</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/trends.jpg')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Trends</h4>
                                <p>What's currently trending in the globe?</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/campus-vipe.png')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Campus Vipe</h4>
                                <p>Latest on the campus life</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../KOIMS/images/image_slider/image6.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Relationships</h4>
                                <p>Tips on how to manage your relationship and many more</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../KOIMS/images/image_slider/image7.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Health</h4>
                                <p>Get to know more about your health</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/betting.jpg')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Betting Tips</h4>
                                <p>Make money by being a fanatic!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../KOIMS/images/image_slider/image9.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Movies</h4>
                                <p>Catch latest on movies.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/unclassified.png')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>&ldquo;Unclassified</h4>
                                <p>More than what you require</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/morata.jpg')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>&ldquo;More sports news</h4>
                            </div>
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#slideIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>







            </div>
        </div>
    </div>


    @endsection