<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="public/css/main.css"> -->
    <style>
        
    </style>
</head>
<body>
    <!-- <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-md-8">
                <form>
                    <fieldset>
                        <legend>
                            Datos de acceso
                        </legend>

                        <label>
                            Email:
                        </label>

                        <input type="text" name="" placeholder="write here">

                        <label>
                            Passowrd:
                        </label>
                        <input type="password" name="" placeholder="*****" name="">

                        <button type="submit">
                            Acceder
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div> -->
    <div class="container">
        <section>
            <div class="row justify-center-md-center align-items-center">
                <div class="col-md-6 col-lg-4 col-sm-12 login">
                    <h1>Acceso al panel</h1>
                    <p>
                        Bienvenido de vuelta
                    </p>

                    <form method="POST" class="form" action="app/AuthController.php">
                        <div>
                            <label for="email">
                                Correo electronico
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Correo" aria-label="Email" aria-describedby="basic-addon1" name="email">
                            </div>
                        </div>
                        <div>
                            <label for="password">
                                Contraseña
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1" name="password">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary col-12 mb-3" name="action" value="access">
                            Acceder
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>