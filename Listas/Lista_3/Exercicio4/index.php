<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="container">
    <form action="resposta.php" method="POST">
        <div class="col">
            <label for="n1" class="label-control">Nº 1:</label>
            <input type="number" class="form-control" id="numero1" name="n1" />
        </div>
        <div class="col">
            <label for="n2" class="label-control">Nº 2:</label>
            <input type="number" class="form-control" id="numero2" name="n2" />
        </div>
        <div class="col">
            <label for="n3" class="label-control">Nº 3:</label>
            <input type="number" class="form-control" id="numero3" name="n3" />
        </div>
        <div class="col">
            <label for="n4" class="label-control">Nº 4:</label>
            <input type="number" class="form-control" id="numero4" name="n4" />
        </div>
        <div class="col">
            <label for="n5" class="label-control">Nº 5:</label>
            <input type="number" class="form-control" id="numero5" name="n5" />
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-warning">Calcular soma dos divisores</button>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>