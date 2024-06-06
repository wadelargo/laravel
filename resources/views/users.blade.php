<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <style>
        body {
            background-color: rgb(231, 231, 231);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px;
        }

        .container {
            text-align: left;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .nav {
            display: flex;
            justify-content: center;
            background-color: #fff; 
            padding: 20px 0; 
            border-top: 2px solid #3d3c3c;
            border-bottom: 2px solid #636363; 
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #FF5733; 
        }
    </style>
</head>
<body>
    <h1>users</h1>
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/users')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Trainors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="">Trainees</a>
          </li>
      </ul>

      <h1>Users</h1>
      <table class='table table-bordered table-striped'>
      <thead>
        <th>id</th>
        <th>email</th>
        <th>full_name</th>
      </thead>
      <tbody>
        <?php foreach($users as $user): ?>

            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->full_name}}</td>
            </tr>

            <?php endforeach; ?>    
      </tbody>
      </table>
