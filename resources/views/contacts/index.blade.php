<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav{
            display:flex;
            justify-content:space-between;
            align-items:center;
            
        }
        .navf{
            display:flex;
            justify-content:space-between;
            align-items:center;
            background-color:violet;
            margin-top:50%;
        }
        .nav ul{
            display:flex;
            list-style-type:none;
            justify-content:space-between;
            width: 30%;
            margin-right:50px;
        }

        .nav ul a{
            text-decoration:none;
            font-family:sans-serif;
            color:white;
            padding:12px;
            
        }
        .nav ul a:hover{
            background-color:violet;
            color:#333333;
        }
        .nav h4{
           
            color:violet;
            padding:12px;
            font-size:20px;
            font-family:sans-serif;
            font-weight:bold;
            margin-left:12px;
        }
        
        .test{
             display:flex;
             justify-content:center;
             background-color:grey;
             color:black;
             margin-top: 5px;
             
             

        }
        .test h1{
            background-color:white;
            padding: 12px;
            font-size:25px;
            padding-left:25px;
            padding-right:25px;
        }
        .text h1{
            padding-left:18px;
            font-size:35px;
            color:red;
        }
        .text1 h1{
            padding-left:18px;
            font-size:35px;
            color:red;
        }
        .text2 h1{
            padding-left:18px;
            font-size:35px;
            color:red;
        }
        .image {
            height: 100vh;
            background-image: url('/image/imageS2.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            

            margin-top: 5px;
        }

    </style>
</head>

<div class="image">
    @include('navbar')

</div>



</body>
</html>