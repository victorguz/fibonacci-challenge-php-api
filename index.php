<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Challenge</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body class="h-100">
    <!-- As a link -->
    <nav class="navbar bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fibonacci Challenge</a>
        </div>
    </nav>

    <div class="container d-flex flex-column align-items-center justify-content-center gap-3 h-100">
        <div class="row">
            <div class="col-lg-6">
                <form action="controllers/fibonacci-for-controller.php" method="get">

                    <div class="d-flex flex-column align-items-center justify-content-center gap-3  h-100">
                        <h6>Calculo de fibonacci con ciclo for</h6>
                        <p class="text-muted">
                            Se refiere al calculo de fibonacci a traves de un ciclo for. Puede necesitar más recursos
                            (tiempo y hardware) para calcularlo.
                        </p>
                        <div class="form-group w-100">
                            <label class="form-label">Ingrese un número</label>
                            <input type="number" min="1" name="position" value="10" class="form-control">
                        </div>
                        <p class="text-danger">
                            Este cálculo acepta números grandes pero el tiempo de respuesta depende
                            de los recursos del servidor.
                            <strong class="text-danger">
                                Máximo número probado: 400000
                            </strong>
                        </p>
                        <button type="submit" class="btn btn-primary w-100">
                            Calcular fibonacci
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-lg-6">
                <form action="controllers/fibonacci-relacion-controller.php" method="get">

                    <div class="d-flex flex-column align-items-center justify-content-center gap-3  h-100">
                        <h6>Calculo de fibonacci con relación de concurrencia</h6>
                        <p class="text-muted">
                            Se refiere al calculo de fibonacci a traves de la relación de
                            concurrencia. Generalmente no requiere muchos recursos.
                        </p>
                        <strong class="text-danger"></strong>
                        <div class="form-group w-100">
                            <label class="form-label">Ingrese un número</label>
                            <input type="number" min="1" name="position" value="10" class="form-control">
                        </div>
                        <p class="text-danger">
                            Este cálculo no acepta números grandes hasta el momento.
                            <strong class="text-danger">
                                Máximo número probado: 1000
                            </strong>
                        </p>
                        <button type="submit" class="btn btn-primary w-100">
                            Calcular fibonacci
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>