<title>About Us</title>
@extends('layouts.main')
@section('content')
   <link rel="stylesheet" href="{{asset('css/mycss/aboutus.css')}}">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 top-div">
            <h1>Welcome</h1>
            <h3>We're Monitor254, a creative blog site that loves to Learn , <br>Collaborate ,Create
            , Entertain , Inform and Educate.</h3>
            <div class="row jumbotron">
                <div class="col-md-8" ><img src="{{asset('images/others/logo.png')}}"> </div>
                <div class="col-md-4 right-div">
                    <h3>About Us</h3>
                    <p>Monitor254 is a platforn which is readily available and ready to give you the latest information
                    from all around the world.<br>
                    We cover all your favourite sports news and latest updates , relationship content , campus vibe, health tips ,
                    betting tips and much more information which you will enjoy.
                        Our objective is to <strong>Inform , Educate and Entertain.</strong></p>
                    <h4>Connect:</h4>
                    <ul>
                        <li><a href="https://facebook.com/Monitor254"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/@Monitorkenya"><i class="fa fa-twitter"></i></a> </li>
                        <li><a href=""><i class="fa fa-google-plus"></i> </a></li>
                        <li><a href=""><i class="fa fa-whatsapp"></i></a> </li>
                    </ul>
                </div>


            </div>


        </div>

    </div>
</div>

    @endsection