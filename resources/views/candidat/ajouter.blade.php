<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULAIRE D'INSCRIPTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="conatainer ">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UN CANDIDAT</h1>
                <hr>
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>

                    @endforeach
                </ul>

                
                <form action="/ajouter/traitement" method="POST" >
                    @csrf
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom"ria-describedby="emailHelp">                    </div>
                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" aria-describedby="emailHelp">                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
                    <br> <br>
                    <a href="/candidat" class="btn btn-danger"> RETOUR A LA LISTE</a>
                    </form>
              
                
            </div>

        </div>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>