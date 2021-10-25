<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="img/account_avatar_face_man_people_profile_user_icon_123197.png">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <!--<button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>!-->
            </div>
        </div>
        <div class="perfil-usuario-body ">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Darly Giron</h3>
            </div>
            <div class="perfil-usuario-footer ">
                <ul class="lista-datos">
                    <li><i class="fab fa-app-store-ios"></i> Nombre:</li>
                    <li><i class="fab fa-angular"></i> Apellido:</li>
                    <li><i class="fab fa-app-store"></i> Email:</li>
                    <a class="fab fa-500px">Cambiar Contraseña</a>
                </ul>


            <?php include('formulario.php')?>
                <div class="col-md-4 col-lg-2">
                    <button type="" class="btn btn-outline-warning btn-rounded sours" data-toggle="modal" data-target="#actualizar">actualizar</button>
                </div>
                
            
            </div>

        </div>

    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			load(1);
		});
	</script>
</body>

</html>