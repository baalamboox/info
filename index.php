<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover table-sm table-responsive-md">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre(s)</th>
                            <th>Apellido parterno</th>
                            <th>Apellido materno</th>
                            <th>Sexo</th>
                            <th>Email</th>
                            <th>Telefóno</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <span class="btn btn-warning" id="show_table">Mostrar datos</span>
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#show_table').click(() => {
                $('#show_data').load('control/table.php');
            });
        });
    </script>
</body>

</html>