<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>BoxbuildTech Add Products</title>
  
  <style>
    html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                height: 300vh;
                margin: 0;
                background: url('/images/loginb5.jpg');
                
            }
            
  </style>
  
 
</head>
@extends('layouts.app')
@section('content')
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add product</button>
<body>
  
  
  <table class="table table-dark " style="opacity : 90%;" >

    <thead>
      <th>IMAGE</th>
      <th>NAME</th>
      <th>PRICE</th>
      <th>CATEGORY</th>
      <th>Quantity</th>
      <th>Action</th>
    </thead>
    
  @foreach($products as $product)
  
     <tbody>
      <tr>
        <td><img height="200" width="200" src="{{asset(ltrim($product->image,"C:\laragon\www\Boxbuildtech\public"))}}" /></td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->quantity}}</td>
        <td>
        <form action="/api/product/{{$product->id}}" method="post">
            <input type="submit" value="Delete" placeholder="Delete" />
          </form>
        </td>
    
        </tr>
     </tbody>
  @endforeach
</table>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/api/product" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="text" name="name" class="form-control" placeholder="Product Name"/>
            <input type="text" name="price" class="form-control" placeholder=" Price"/>
            <select class="form-control" id="category" name="category">
              <option value="Mouse">Mouse</option>
              <option value="Ram Desktop">Ram Desktop</option>
              <option value="Ram Laptop">Ram Laptop</option>
              <option value="Keyboard">Keyboard</option>
              <option value="Monitor">Monitor</option>
              <option value="Graphics Card">Graphics Card</option>
              <option value="Processor">Processor</option>
              <option value="Motherboard">Motherboard</option>
              <option value="CPU Case">CPU Case</option>
              <option value="CPU Cooler">CPU Cooler</option></option>
              <option value="Power Supply">Power Supply</option>
            </select>
            <input type="text" name="quantity" class="form-control" placeholder=" Quantity"/>
            <input type="submit" value="Submit" class="form-control"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
</body>
</html>