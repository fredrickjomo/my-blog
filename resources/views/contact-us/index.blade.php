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
                    <form action="{{route('contact-us.store')}}" method="post">
                    {{csrf_field()}}

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group row col-md-5">
                                        <label for="name">Name<span class="required">*</span> </label>
                                        <input  id="name" required name="name" spellcheck="false" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" value="{{old('name')}}"/>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class="form-group row col-md-5 ">
                                        <label for="email">Email<span class="required">*</span> </label>
                                        <input  id="email" required name="email" spellcheck="false" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{old('email')}}"/>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>


                                    <div class="form-group row col-md-11">
                                        <label for="message">Message<span class="required">*</span> </label>
                                        <textarea id="message" name="message" spellcheck="false" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" value="{{old('message')}}"  style="resize:vertical;"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                        @endif
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


    @endsection