<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .header, .footer{
            display: flex;
            justify-content: center;
            background-color: #535E4B;
        }
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width:100%;
        }
        body{
            height: 100%;
            background-color: #B2AC88;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="header">
    <p style="color:#B2AC88;">Logo</p>
</div>
@yield('content')
<div class="footer">
    <p style="color:#B2AC88;">Information</p>
</div>
</body>
</html>
