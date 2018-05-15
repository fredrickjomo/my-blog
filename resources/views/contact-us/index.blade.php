@extends('layouts.main')
<title>Contact us</title>
@section('content')

<style>
.contact-us{

    //border: 1px solid pink;
    font-family: Georgia;

}
    .contact-us span{
        color: red;
    }
    .contact-us button{
        background-color: #721c24;
    }
</style>
    <div class="container-fluid contact-us">
        <div class="row jumbotron">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h2 class="display-6">Contact us</h2>
                    <p class="lead">You would like to contact our blog admin, if you have any queries/ concerns/ thoughts or
                        if you want to  say "hello", please feel free to contact us using the form below.We
                        would love to here from you and will endeavor to reply as soon as we can.Thank you!</p>
                    <p class="lead">Send us your message</p>
                    <hr class="my-4">
                    <form action="" method="post">
                    {{csrf_field()}}

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group row col-md-5">
                                        <label for="name">Name<span class="required">*</span> </label>
                                        <input  id="name" required name="name" spellcheck="false" class="form-control" type="text"/>

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class="form-group row col-md-5 ">
                                        <label for="email">Email<span class="required">*</span> </label>
                                        <input  id="email" required name="email" spellcheck="false" class="form-control" type="email" />

                                    </div>


                                    <div class="form-group row col-md-11">
                                        <label for="message">Message<span class="required">*</span> </label>
                                        <textarea id="message" name="message" spellcheck="false" class="form-control"></textarea>

                                    </div>
                            </div>
                        </div>


                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary col-md-4">
                                SEND
                            </button>
                        </div>

                    </form>


                </div>
            </div>
            {{--right-hand div--}}
            <style>
                .col-md-6{
                    padding: 0;
                    margin: 0;
                }
                .col-md-6 img{
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    height: 600px;
                }
                .card-header h2{
                    text-align: center;
                }
                .card{

                    padding: 0;
                    margin: 0;
                }
                .card-body{

                    padding: 0;
                }
                .fa-facebook-square{
                    color: darkblue;
                }
                .fa-youtube-square{
                    color: red;
                }
                .fa-twitter-square{
                    color: blue;
                }
                .fa-whatsapp{
                    color: green;
                }
                .fa-envelope-open{
                    color: #005cbf;
                }
                 .myphone{
                    color: #005cbf;
                }
                .icons{
                    font-size: 25px;
                }

                .image-div{
                    padding: 0;

                }
                .image-div img{
                    padding: 0;
                    width: 100%;
                    height: 400px;
                }
                .contacts{
                    padding-top: 20px;
                    padding-left: 40px;
                }
                .social{
                    padding-top: 20px;
                    padding-left: 40px;
                }
            </style>
            <div class="col-md-6">
                <img src="{{asset('images/others/contact-us2.jpg')}}">
            </div>
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h2>Find Us Through:</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-4 contacts text-left">
                        <h4>Contacts</h4>
                        <p><i class="fa fa-envelope-open icons"></i> Email: fredyobi7@gmail.com</p>
                        <p ><i class="fa fa-phone myphone icons"></i> Tel No: 0710 572 421</p>
                            <br>
                            <h4>Our Address</h4>
                            P.O BOX 123,<br>
                            KISII.
                        </div>

                            <div class="col-md-4 col-xs-12 col-12 image-div">
                                <img src="{{asset('images/others/contacts.jpg')}}">
                            </div>


                        <div class="col-md-4 social text-left">
                        <h4>Social Media</h4>
                        <p ><i class="fa fa-facebook-square icons" aria-hidden="true"></i><a href="https://facebook.com/Monitor254"> Facebook</a></p>
                        <p ><i class="fa fa-youtube-square icons" aria-hidden="true"></i><a href="https://youtube.com/Monitor254"> Youtube</a></p>
                        <p ><i class="fa fa-twitter-square icons" aria-hidden="true"></i><a href="https://twitter.com/@Monitorkenya"> Twitter</a></p>
                        <p><i class="fa fa-whatsapp icons" aria-hidden="true"></i> <a href=""> Whatsapp</a></p>
                        </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- <link rel="stylesheet" href="{{asset('css/mycss/contacts.css')}}">-->
{{--<div class="container">
    <div class="row">
        <!--slide show -->



        <div class="col-md-4 card alert alert-secondary">
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
        <div class="col-md-4 card alert alert-secondary">
            <h4>Contacts</h4>
            <p><i class="fa fa-envelope-open"></i> Email: fredyobi7@gmail.com</p>
            <p ><i class="fa fa-phone"></i> Tel No: 0710 572 421</p>
            <h4>Social Media</h4>
            <p ><i class="fa fa-facebook-square"></i><a href="https://facebook.com/Monitor254"> Facebook</a></p>
            <p ><i class="fa fa-youtube-square"></i><a href="https://youtube.com/Monitor254"> Youtube</a></p>
            <p ><i class="fa fa-twitter-square"></i><a href="https://twitter.com/@Monitorkenya"> Twitter</a></p>
            <p><i class="fa fa-whatsapp"></i> <a href=""> Whatsapp</a></p>

        </div>
        <div class="col-md-4 card alert alert-secondary"></div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12 message-div">
        <p><h5>You would like to contact our blog admin, if you have any queries/ concerns/ thoughts or
            if you want to say "hello", please feel free to contact us using the form below.We
            would love to here from you and will endeavor to reply as soon as we can.Thank you!</h5></p>
        <h4 id="message-header">Send us your message</h4>

        <form action="" method="post">
        {{csrf_field()}}

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-5">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif

                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-5">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

            </div>
            <div class="form-group row">
                <label for="message" class="col-md-4 col-form-label text-md-right">Your Message</label>

                <div class="col-md-5">
                            <textarea id="message"class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required autofocus>

                            @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </textarea>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>
                </div>
            </div>
        </form>

    </div>
    </div>
</div>
--}}
    @endsection