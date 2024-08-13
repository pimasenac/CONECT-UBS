<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | UBS</title>

        <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
            
            }
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            font-family: Arial, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            width: 500%;
            background-color: #ffffffef;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(2, 238, 206, 0.897); /*sombreamento da borda*/
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        
        /* Responsividade para a logo */
        .logo {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px; /* Espaço extra abaixo da logo */
        }
        @media (max-width: 100px) {
            .container {
                padding: 15px;
            }
        }
        a{
            text-decoration: none;
            color: black;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 7px;
        }
        a:hover{
            background-color: dodgerblue;
        }
       
    </style>
</head>
<body>
<h1 style="color:black;">BEM-VINDO AO CONNECT UBS</h1>
    <h2></h2>
    <div class="box">
    <div class="container">
    <img src="logo.png" alt="Logo.png" class="logo">
    <br>
    <a href="login.php">LOGIN</a>
        <br>
        <br>
        <br>
    <a href="formulario.php">CADASTRE-SE</a>
    </div>
</body>
</html>