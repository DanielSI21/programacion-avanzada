<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/head.template.php"; ?>
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
                    <?php for($i = 0; $i<12; $i++): ?>
                    <div class="col-md-3 p-3">
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
                                    <a href="#" class="btn btn-warning col-6" data-bs-target="#exampleModal"> 
                                        Editar
                                    </a>
                                    <a onclick="remove(this)" class="btn btn-danger col-6">
                                        Eliminar
                                    </a>
                                    <a href="details.php" class="btn btn-info col-12">
                                        Detalles
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga possimus corporis molestiae cupiditate consequatur, nulla dicta numquam facere maiores nostrum corrupti ducimus expedita tempora laudantium ad itaque repellat natus qui!
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function remove(target)
        {
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })
        }
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>