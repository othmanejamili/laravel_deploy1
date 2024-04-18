<!DOCTYPE html>
<html lang="en">
<head>
@section('title')
Edit Category
    @endsection
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ URL('images/ofppt.png') }}">

    <style>
        /* Optional CSS for additional styling */
        /* Adjust styles as needed */
        body {
            padding-top: 70px; /* Adjust according to the navbar height */
        }
        /* Custom CSS for navbar */
        .custom-navbar {
            box-shadow: 0 10px 15px -3px rgba(33, 150, 243, .4), 0 4px 6px -4px rgba(33, 150, 243, .4);
            background-color: #1a1b31;
            background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
        }
        .photo img{
            width: 60px;
            height: 60px;
            box-shadow: 0px 0px 10px #777;
            border-radius: 50%;
            
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="submit"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 100%;
        }
    </style>
</head>
<body>
 <!-- Navbar -->
 @extends('layouts.app')

<br>
    <div class="container">
        <h2>Edit Category</h2>
        @if(session("success"))
            <div class="alert alert-success">{{session("success")}}</div>
        @endif
        <form action="{{ url('category/'.$category->id.'/edit') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description" value="{{$category->description}}" placeholder="Description">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="is_active" value="{{$category->is_active}}" placeholder="Is Active">
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
