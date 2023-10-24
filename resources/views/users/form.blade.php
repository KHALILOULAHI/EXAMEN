<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <h1>Créer une voiture</h1>
    <div class="col-md-8 ms-5">

        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="immatriculation" class="form-label">nom</label>
                <input type="text" id="immatriculation" name="nom" class="form-control">

            </div>

            <div class="mb-3 py-t">
                <label for="marque" class="form-label">prenom</label>
                <input type="text" id="marque" name="prenom" class="form-control  ">

            </div>

            <div class="mb-3">
                <label for="modele" class="form-label">email</label>
                <input type="text" id="modele" name="email" class="form-control ">

            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">date</label>
                <input type="number" id="annee" name="date" class="form-control  ">

            </div>


            <a></a>

            <button class="btn btn-primary">Ajouter un utilisateur</button>
        </form>
    </div>
</body>

</html>