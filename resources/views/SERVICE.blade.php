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

        .services-section {
            margin-top: 150px;
            margin-left: 25px;
            width: 250px;
            background: violet;
            border-radius: 10px;
            padding: 25px;
            color: white;
        }

        .propo2 h2{
            color: white;
        }
        .propo2 p{
            color: white;
        }
        
        .tree-column {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            margin-top: 50px; 
            
        }
        .services-section ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .services-section li{
            margin-bottom: 10px;
        }

        .services2-section {
            margin-top: 150px;
            margin-left: 25px;
            width: 250px;
            background: violet;
            border-radius: 10px;
            padding: 25px;
            color: white;
        }
        .services2-section ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .services2-section li{
            margin-bottom: 10px;
        }
        .services3-section {
            margin-top: 150px;
            margin-left: 25px;
            width: 250px;
            background: violet;
            border-radius: 10px;
            padding: 25px;
            color: white;
        }
        .services3-section ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .services3-section li{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="image">
    @include('navbar')
    <div class="tree-column">
        <div class="services-section">
            <div class="propo2">
                <h2> Services de Conception Web </h2>
                <ul>
                    <li>Conception de Sites Web Personnalisés</li>
                    <li>Conceptions sur mesure qui reflètent l'identité de la marque du client.</li>
                    <li>Conceptions réactives qui fonctionnent sur tous les appareils (mobile, tablette, ordinateur de bureau).</li>
                    <li>Conception de l'interface utilisateur (UI) et de l'expérience utilisateur (UX) pour garantir un parcours utilisateur intuitif et engageant.</li>
                </ul>

            </div>

    
        
        </div>
        <div class="services2-section">
            <div class="propo2">
                <h2> Services de Développement Web </h2>
                <ul>
                    <li>Mise en œuvre des aspects visuels et interactifs d'un site web en utilisant HTML, CSS et JavaScript.</li>
                    <li>Assurer la compatibilité entre navigateurs et la conception réactive</li>
                    <li>Utilisation de technologies telles que PHP, Node.js, Python, Ruby, et autres.</li>
                    <li>Construction d'applications web complètes de bout en bout.</li>
                </ul>

            </div>

    
        
        </div>
        <div class="services3-section">
            <div class="propo2">
                <h2> Services Supplémentaires  </h2>
                <ul>
                    <li>Mise en œuvre des aspects visuels et interactifs d'un site web en utilisant HTML, CSS et JavaScript.</li>
                    <li>Assurer la compatibilité entre navigateurs et la conception réactive</li>
                    <li>Utilisation de technologies telles que PHP, Node.js, Python, Ruby, et autres.</li>
                    <li>Construction d'applications web complètes de bout en bout.</li>
                </ul>

            </div>

    
        
        </div>
    </div>
</div>




</body>
</html>