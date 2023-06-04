<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
    public function liste_candidat()
    {
        $candidats = Candidat::all();
        return view('candidat.liste',compact('candidats'));
    }

    public function ajouter_candidat()
    {
        return view('candidat.ajouter');
    }

    public function ajouter_candidat_traitement(Request $request)
    {
       $request->validate([

        'nom'=>'required',
        'prenom'=>'required',
        'telephone'=>'required',
        'email'=>'required'

       ]);

       $candidat = new Candidat();
       $candidat ->nom = $request->nom;
       $candidat ->prenom = $request->prenom;
       $candidat ->telephone = $request->telephone;
       $candidat ->email = $request->email;
       $candidat ->save();

       return redirect('/ajouter')->with('status', 'Enregistrer avec succes !!!!');

    }

    public function update_candidat($id){
        return view('update_candidat');

    }


    public function delete_candidat($id)
    {
    //    dd($id);

    $candidat = Candidat::findOrFail($id);
    $candidat->delete();

    return redirect()->back()->with('status', 'Supprimer avec succes !!!!');


    }

}
  