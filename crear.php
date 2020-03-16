<head>

<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
    <title>CREAR UN USUARIO</title>

    
</head>
<body background="3.jpg">


<div class="container">
    <div>
        <h1>
            CREAR USUARIO<br>
        </h1>
        <h2>
             <div class="input-contenedor">
               <i class="fas fa-users-crown"></i>
            <a href="index.php">Lista de usuarios</a>
        </h2>
    </div>
    
    
         

    <div>
    <form action="guardar.php" method="post">
        <table class="table">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email(*)</th>
                <th>password(*)</th>
            </tr>
            </thead>

            <tbody class="center">
            <tr>
                <td>
                <div class="input-contenedor">
                <i class="fas fa-user-plus"></i>

                    <input type="text" name="nombre" size="40">

                </td>


                <td>
                <div class="input-contenedor">
                <i class="fas fa-user-plus"></i>

                    <input type="text" name="apellido" size="40">
                
                </td>


                <td>
                <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>

                    <input type="text" name="email" size="40">
                
                </td>


                <td>
                <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                
                    <input type="password" name="password" size="40">
                
                </td>


            </tr>
            <tr>
                <td colspan="4"><br><button type="submit"> <i class="fas fa-thumbs-up"></i> Guardar</button></td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>

</body>
</html>