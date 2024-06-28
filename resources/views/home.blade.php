<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        

        /*.navf{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-top:10%;
            
        }*/
        .nav ul {
            display: flex;
            list-style-type: none;
            justify-content: space-between;
            width: 30%;
            margin-right: 50px;
        }

        .nav ul a {
            text-decoration: none;
            font-family: sans-serif;
            color: white;
            padding: 12px;

        }

        .nav ul a:hover {
            background-color: violet;
            color: #333333;
        }

        .nav h4 {
            
            color: violet;
            padding: 1px;
            font-size: 20px;
            font-family: Arial;
            font-weight: bold;
            margin-left: 12px;
        }

        /*.navf h4{
            background-color:white;
            color:#333333;
            padding:12px;
            font-size:20px;
            font-family:sans-serif;
            font-weight:bold;
            margin-left:50%;
        }*/
        .test {
            display: flex;
            justify-content: center;
            background-color: grey;
            color: black;
            margin-top: 5px;



        }

        .test h1 {
            background-color: white;
            padding: 12px;
            font-size: 25px;
            padding-left: 25px;
            padding-right: 25px;
        }

        .text h1 {
            padding-left: 18px;
            font-size: 35px;
            color: red;
        }

        .text1 h1 {
            padding-left: 18px;
            font-size: 35px;
            color: red;
        }

        .text2 h1 {
            padding-left: 18px;
            font-size: 35px;
            color: red;
        }

        .image {
            height: 100vh;
            background-image: url('/image/imageS2.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            

            margin-top: 5px;
        }

        .image .centre {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 20px;
            margin-top: 230px;
        }

        .text p {
            font-size: 35px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
            margin: 0;
        }

        .form {
            width: 250px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 25px;
            color: white;
        }

        .form h2 {
            text-align: center;
            color: violet;
            font-size: 22px;
            background-color: white;
            border-radius: 10px;
            margin: 0 0 20px;
            padding: 8px;
        }

        .form label {
            display: block;
            margin: 10px 0 5px;
        }

        .form input {
            width: 240px;
            height: 35px;
            background: transparent;
            border: none;
            border-bottom: 1px solid violet;
            color: white;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
            height: 40px;
            background: violet;
            border: none;
            margin-top: 20px;
            font-size: 18px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            display: block;
            line-height: 40px;
        }

        .btn:hover {
            background: white;
            color: violet;
        }

        .btn a {
            color: inherit;
            text-decoration: none;
            display: block;
        }
        
    </style>
</head>

<body>

    <div class="image">
        @include('navbar')

    <div class="centre">
        <div class="text">
          <p>BOOST YOUR <br>
           BUSINESS WITH <br>
            WEB DESIGN</p>
        </div> 
        <div class="form">
            
                <h2> LOGIN HERE </h2>
                
                        <label for="email"> Email </label>
                        <input type="email" id="email" placeholder="Enter your email" required>

                        <label for="password"> Password </label>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    
                        <button class="btn"><a href="#"> LOGIN </a></button>
                
            
            
         
    
        </div>
    </div>



</body>

</html>