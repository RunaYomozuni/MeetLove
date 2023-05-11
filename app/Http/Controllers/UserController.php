<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Amitie, User, Interet};


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //j'appelle une méthode du modèle User
        //qui renvoit un array list de users
        $users = User::all('*');
        return view('ViewUsers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('ViewUser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('ViewModifierUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $userRequest, User $user)
    {
        $user->update($userRequest->all());

        if (isset($_SESSION['nouveauUser'])) {
            unset($_SESSION['nouveauUser']);}

            return view('ViewUser', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**     AUTRES  FONCTIONS   */
    /********************************************
     * /********************************************/

    public function getAmitiesUser(User $user)
    {
        //ON FAIT UNE REQUETE POUR AVOIR LES AMIS DU USER (en attente de réponse ou non)
        $amities = Amitie::query()->where('demandeur_id', '=', $user->id)->orWhere('receveur_id', '=', $user->id)->getModels();

        $lesAmities = array();

        // ON Parcourt la liste des amitiés qui correspond
        foreach ($amities as $amitie) {
            //SI le demandeur n'est pas le user on récupère le demandeur en tant qu'ami
            if ($amitie->demandeur_id != $user->id) {
                $ami = User::query()->where('id', '=', $amitie->demandeur_id)->getModels();
                //et on note que le user est le receveur
                $array = array($ami[0], $amitie, "receveur");
                array_push($lesAmities, $array);
            }
            //SI le receveur n'est pas le user on récupère le receveur en tant qu'ami
            if ($amitie->receveur_id != $user->id) {
                $ami = User::query()->where('id', '=', $amitie->receveur_id)->getModels();
                //et on note que le user est le demandeur
                $array = array($ami[0], $amitie, "demandeur");
                array_push($lesAmities, $array);
            }
        }
        return view('ViewUserAmities', compact('user', 'lesAmities'));
    }

}
