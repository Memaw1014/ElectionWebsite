@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Registration</title>
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
    </style>
  </head>
  <body>
    <form action="register" method="post">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required />

      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required/>

      <button type="submit">Submit Registration</button>
    </form>
  </body>
</html>
