<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calcular media</title>
</head>

<body>
    <div class="container">
        <h1>Calcular media</h1>
        <form action="/calcular_media" method="post">
            <div class="row">
                <div class="col-5">
                    <label for="valor1" class="label-control">Informe a nota 1: </label>
                    <input type="number" class="form-control" name="valor1" id="valor1" />
                </div>
                <div class="col-5">
                    <label for="valor2" class="label-control">Informe a nota 2: </label>
                    <input type="number" class="form-control" name="valor2" id="valor2" />
                </div>
                <div class="col-5">
                    <label for="valor3" class="label-control">Informe a nota 3: </label>
                    <input type="number" class="form-control" name="valor3" id="valor3" />
                </div>
                <div class="col-5">
                    <label for="valor4" class="label-control">Informe a nota 4: </label>
                    <input type="number" class="form-control" name="valor4" id="valor4" />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>