<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        border: 2px solid rgb(25, 25, 26);
    }
    input{
        align-content: center;
    }
    body{
            background-image: url("a.jpg");
            background-repeat: no-repeat;
            /* background-size: auto; */
            background-size: 1500px 750px;
        }
        form{
            border: 2px solid rgb(25, 25, 26);
            padding: 30px;
            margin-right: 55%;
            margin-left: 25%;
            margin-top: 10%;
        }
        .button2{
            background-color: rgb(97, 240, 121); /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
    }
</style>
<body>
    <h1>This is Contect Page</h1>
    <form action="/passdata" method="post">
        @csrf

        name &nbsp;<input type="text" name="name" placeholder="enter your name"><br><br>
        email &nbsp;<input type="text" name="email" placeholder="enter your email"><br><br>
        mobile<input type="text" name="mobile" placeholder="enter your mobileno"><br><br>
        age &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" placeholder="enter your age"><br><br>
        city  &nbsp;&nbsp;&nbsp;<input type="text" name="city" placeholder="enter your city"><br><br>
        area &nbsp;&nbsp;<input type="text" name="area" placeholder="enter your area"><br><br>
        <input type="submit" value="submit" class="button2">
    </form>
</body>
</html>