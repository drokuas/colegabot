
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>login colega bot</title>
    <link rel="stylesheet" href="./public/css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <a href="./index.php">
                                        <img class="rounded mx-auto d-block" src="../public/img/bot1.png" alt="" height="60px">
                                    </a>
                                    <h3 class="text-center font-weight-light my-4">Registrate</h3>
                                </div>
                                <div class="card-body">
                                        <?php
                                        if(isset($texto)){
                                        echo $texto;
                                        }
                                        ?>
                                    <form action="../includes/validar.php" method="POST">
                                        <div class="row m-2">
                                        <div class="col">
                                                <label for="rut" class="form-label">Rut</label>
                                                <input type="text" class="form-control" placeholder="Ingrese Rut" id="Rut" required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" placeholder="Ingrese Nombre" id="nombre" required onChange="validar(this)">
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="apellidoPat" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" placeholder="Ingrese Apellido" id="apellidoPat" required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="apellidoMat" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" placeholder="Ingrese Apellido" id="apellidoMat" required onChange="validar(this)">
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="edad" class="form-label">Edad</label >
                                                <input type="number" class="form-control" placeholder="Ingrese Edad" id="edad"required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Ingrese Email" id="direccion" >
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="telefono" class="form-label">telefono</label>
                                                <input type="phone" class="form-control" placeholder="Ingrese Telefono" id="telefono">
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="padding: 20px;">
                                            <input type="hidden" name="opcion" value="registrate">
                                            <button type="submit" class="btn btn-primary ">Registrate</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Iniciar Sesión</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <form action="Index.php">
                <input type="submit" value="ir a inicio">
            </form>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Todos los Derechos Reservados / Colega Bot</div>
                        <div>
                            <a href="#">Politica de Privacidad</a>
                            &middot;
                            <a href="#">Terminos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./public/js/scripts.js"></script>
    <script>
        function validar(inputElement){
            var valor = inputElement.value;
            var patron = /^[^!@#$%^&*()+{}\[\]\"\':;<>~\\/]+$/;
            if(patron.test(valor)){
                inputElement.setCustomValidity('');
            }else{
                inputElement.setCustomValidity('El campo, contiene elementos no permitidos');
            }
        }
    </script>
</body>

</html>


 