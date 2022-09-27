<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/head.template.php"; ?>
    <?php include "../layouts/scripts.template.php"; ?>
</head>
<body>
    <!-- navbar -->
    <?php include "../layouts/nav.template.php"; ?>

    <!-- container -->
    <div class="container-fluid">

        <div class="row">
            <!-- sidebar -->
            <?php include "../layouts/sidebar.template.php"; ?>
            
            <!-- content -->
        <div class="col-lg-10 col-sm-12">
            <!-- breadcrum -->
            <div class="border-bottom">
                <div class="row m-2">
                    <div class="col">
                        <h4>Productos</h4>
                    </div>
                    <div class="col">
                        <button class="btn btn-info float-end">
                            Añadir producto
                        </button>
                    </div>
                </div>
            </div>

            <!-- content -->
            <div class="row">
                <div class="col-md-4 p-3">
                    <div class="card">
                        <img src="../public/img/logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Card title
                            </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <div class="row">
                                <a href="#" class="btn btn-warning col-6">
                                    Editar
                                </a>
                                <a href="#" class="btn btn-danger col-6">
                                    Eliminar
                                </a>
                                <a href="details.php" class="btn btn-info col-12">
                                    Detalles
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga possimus corporis molestiae cupiditate consequatur, nulla dicta numquam facere maiores nostrum corrupti ducimus expedita tempora laudantium ad itaque repellat natus qui!
            </p>
        </div>
        </div>
    </div>
</body>
</html>