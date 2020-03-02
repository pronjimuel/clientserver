<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>BoxBuild Tech</title>
       
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: url('/images/loginb5.jpg');
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    @extends('layouts.app')
    <body>
        @section('content')
        <div class="row">
            @foreach($products as $product)
            <div class="card col-md-xs" style="width: 14rem ; opacity : 85% !important;">

                <img class="card-img-top" src="{{asset(ltrim($product->image,"C:\laragon\www\Boxbuildtech\public"))}}"alt="Card image cap"> 
                <div class="card-body">
                  <h5 class="card-title"> {{$product->name}}</h5>
                  <h5 class="card-category"> {{$product->category}}</h5>
                  <h5 class="card-price"> ₱{{$product->price}}</h5>
                  <h5 class="card-price">Stock:( {{$product->quantity}} )</h5>
                    <a href="#" class="btn btn-primary">Get it</a>
                </div>
              </div>
            @endforeach
            </div>
    </body>
    @endsection

    
        
        
       
        
        



