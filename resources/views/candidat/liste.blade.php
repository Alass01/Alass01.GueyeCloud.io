<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULAIRE D'INSCRIPTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="conatainer text-center">
        <div class="row">
            <div class="col s12">
                <h1>FORMULAIRE D'INSCRIPTION</h1>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter  un candidat</a> 
                <hr> 
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($candidats as $candidat)
                             @csrf("delete")
                            <tr>
                                <td>{{$candidat->id}}</td>
                                <td>{{$candidat->nom}}</td>
                                <td>{{$candidat->prenom}}</td>
                                <td>{{$candidat->telephone}}</td>
                                <td>{{$candidat->email}}</td>
                                <td>
                                        
                                    <form action="{{route('delete_candidat', $candidat->id)}}" method="POST" >
                                        @csrf 
                                        <button type="submit" class="btn btn-danger">Delete</button> 
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>