<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Front Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items:center;
            height: 80vh;
            background-image: url('/images/bg.jpg');
            background-size: cover;
            margin-left:70px;
        }

        button {
            background-color: #1e01dd;
            color: #fff;
            padding: 15px 20px; 
            font-size: 40px;
            border: none;
            border-radius: 0px;
            cursor: pointer;
            
        }

        .form-label {
            font-size: 25px;
            
        }
        #logo {
            position: absolute;
            bottom:500px; 
            right: 10px; 
            max-width: 250px; 
            height: auto;
        }
        #admin_btn{
            color:white;
        }
        #frontpage{
            max-width:500px;
        }
    </style>
</head>
<body>
    <div>
     <img src="/images/logo.png" alt="Extra Image" id = "logo">
     <img src="/images/front_page_bg.PNG" alt="Extra Image" id = "frontpage">
    </div>

    <a href="{{ route('route') }}"><button>Be a Volunteer Now</button></a>
    <div class="mb-3">
        <div class="d-flex flex-column align-items-center">
            <a href="{{ route('login') }}" class="form-label" id="admin_btn">Login as Admin</a>
        </div>
    </div>
</body>
</html>
