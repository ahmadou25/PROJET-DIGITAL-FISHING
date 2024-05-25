<?php

namespace App\Http\Controllers;
use App\Models\Contrat;
use App\Models\Pigiste;
use App\Models\Magazine;
use Illuminate\Http\Request;

class PigisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pigistes = Pigiste::all();
        return view('pigistes.index',compact('pigistes'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pigistes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /**
         * Gestion des erreurs de saisie
         */
        $rules = [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'required',
            'cp' => 'required|digits:5',
            'ville' => 'required',
            'mail' => 'required|email|unique:pigistes,mail',
            'tel' => 'required|digits:10',
            'securitesociale' => 'required|digits:15|unique:pigistes,securitesociale',
            'contratcadre' => 'required',
        ];
        $customMessages = [
            'nom.required' => 'Vous devez entrer un nom.',
            'prenom.required' => 'Vous devez entrer un prénom.',
            'adresse.required' => 'Vous devez entrer une adresse',
            'cp.required' => 'Vous devez entrer un code postal',
            'ville.required' => 'Vous devez entrer une ville',
            'mail.required'  => 'Vous devez entrer un mail',
            'tel.required' => 'Vous devez entrer un numéro de téléphone',
            'securitesociale.required' => 'Vous devez entrer une date de paiement',
            'contratcadre.required' => 'Vous devez entrer un contrat cadre',
            'cp.digits'  => 'Le code postal doit avoir 5 chiffres',
            'tel.digits'  => 'Le numéro de télephone doit avoir 10 chiffres ',
            'securitesociale.digits'  => 'Le numéro de sécurité sociale doit avoir 15 chiffres',
            'mail.email'  => 'Le format email n\'est pas respecté' ,
            'mail.unique'  => 'Email déjà existant',
            'securitesociale.unique'  => 'Numéro de sécurité sociale déjà existant',

        ];
        $request->validate($rules, $customMessages);


        Pigiste::create($request->all());
        return redirect()->route('pigistes.index')
            ->with('success','Pigiste ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pigiste  $pigiste
     * @return \Illuminate\Http\Response
     */
    public function show(Pigiste $pigiste)
    {
        return view('pigistes.show',compact('pigiste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pigiste  $pigiste
     * @return \Illuminate\Http\Response
     */
    public function edit(Pigiste $pigiste)
    {
        return view('pigistes.edit',compact('pigiste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pigiste  $pigiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pigiste $pigiste)
    {
        /**
         * Gestion des erreurs de saisie
         */
        $rules = [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'required',
            'cp' => 'required|digits:5',
            'ville' => 'required',
            'mail' => 'required|email',
            'securitesociale' => 'required|digits:15',
            'contratcadre' => 'required',
        ];
        $customMessages = [
            'nom.required' => 'Vous devez entrer un nom.',
            'prenom.required' => 'Vous devez entrer un prénom.',
            'adresse.required' => 'Vous devez entrer une adresse',
            'cp.required' => 'Vous devez entrer un code postal',
            'ville.required' => 'Vous devez entrer une ville',
            'mail.required'  => 'Vous devez entrer un mail',
            'securitesociale.required' => 'Vous devez entrer un numéro de sécurité sociale',
            'contratcadre.required' => 'Vous devez entrer un contrat cadre',
            'cp.digits'  => 'Le code postal doit avoir 5 chiffres',
            'tel.digits'  => 'Le numéro de télephone doit avoir 10 chiffres ',
            'securitesociale.digits'  => 'Le numéro de sécurité sociale doit avoir 15 chiffres',
            'mail.email'  => 'Le format email n\'est pas respecté' ,
            'mail.unique'  => 'Email déjà existant',
            'securitesociale.unique'  => 'Numéro de sécurité sociale déjà existant',

        ];
        $request->validate($rules, $customMessages);

        $pigiste->update($request->all());
        return redirect()->route('pigistes.index')
            ->with('success','Pigiste mis à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pigiste  $pigiste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pigiste $pigiste)
    {
        $pigiste->delete();
        return redirect()->route('pigistes.index')
            ->with('success','Pigiste supprimé avec succès');
    }
}