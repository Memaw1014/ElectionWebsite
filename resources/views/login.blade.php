@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      button {
        grid-column: span 4;
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      a.register{
        margin-top: 10px;
      }
      #ku-yogi-mi{
        position: absolute;
            top: 60px;
            right: 250px;
            max-width: 550px;
            height: auto;
      }
      #logo{
        position: absolute;
            bottom:510px; 
            right: 10px; 
            max-width: 250px; 
            height: auto;
      }
    </style>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div>
  <img src="/images/ku-yogi-mi.png" alt="baw" id="ku-yogi-mi">
  <img src="/images/logo.png" alt="Extra Image" id = "logo">
  </div>
    <div class="container">
        <form id="loginForm" action="{{ route('login') }}" method="post">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />

            <button type="submit">Login</button>

            <a   class="register"id="register">Register Admin</a>
        </form>
    </div>
    <script>
      document.getElementById("register").addEventListener("click", function (event) {
          
          event.preventDefault();

          
          var password = prompt("Authorized Personnel Only!!!\nPlease Enter Password to Register");

          
          if (password === "Ku-Yogi-Mi") {
              window.location.href = "{{ route('admin') }}";
          } else {
              alert("Incorrect password. Access denied.");
              
          }
      });
    </script>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
@endsection
