<?php

namespace App\Http\Controllers;
use App\Models\Pigiste;
use App\Models\Magazine;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $magazines = Magazine::all();
        $pigistes = Pigiste::all();

        $selectedMagazine = $request->input('magazine_id');
        $selectedPigiste = $request->input('pigiste_id');

        $contratsQuery = Contrat::query();

        if ($selectedMagazine) {
            $contratsQuery->where('nummagazine', $selectedMagazine);
        }

        if ($selectedPigiste) {
            $contratsQuery->where('numpigiste', $selectedPigiste);
        }

        $contrats = $contratsQuery->get();

        return view('contrats.index', compact('contrats', 'magazines', 'pigistes', 'selectedMagazine', 'selectedPigiste'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pigistes = Pigiste::all(); // Récupérez la liste des pigistes depuis la base de données 
        $magazines = Magazine::all(); // Récupérez la liste des magazines depuis la base de données              
        return view('contrats.create', ['pigistes' => $pigistes], ['magazines' => $magazines]);
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
            'lettreaccord' => 'required|string',
            'etat' => 'required|integer',
            'agessa' => 'required|integer',
            'facture' => 'required|integer',
            'montant' => 'required|numeric',
            'montantn' => 'required|numeric',
            'datepaiement' => 'required|date',
            'numpigiste' => 'required|integer',
            'nummagazine' => 'required|integer',
        ];
        $customMessages = [
            'lettreaccord.required' => 'Vous devez entrer un accord.',
            'etat.required' => 'Vous devez entrer un état.',
            'agessa.required' => 'Vous devez entrer un agessa',
            'facture.required' => 'Vous devez entrer une facture',
            'montant.required' => 'Vous devez entrer un montant',
            'montantn.required'  => 'Vous devez entrer un montant NET',
            'datepaiement.required' => 'Vous devez entrer une date de paiement',
            'numpigiste.required' => 'Vous devez entrer un numéro de pigiste',
            'nummagazine.required'  => 'Vous devez entrer un numéro de magazine',
        ];
        $request->validate($rules, $customMessages);


        Contrat::create($request->all());
        return redirect()->route('contrats.index')
            ->with('success','Contrat ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        return view('contrats.show',compact('contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        return view('contrats.edit',compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrat $contrat)
    {
        /**
         * Gestion des erreurs de saisie
         */
        $rules = [
            'lettreaccord' => 'required|string',
            'etat' => 'required|integer',
            'agessa' => 'required|integer',
            'facture' => 'required|integer',
            'montant' => 'required|integer',
            'montantn' => 'required|numeric',
            'datepaiement' => 'required|date',
            'numpigiste' => 'required|integer',
            'nummagazine' => 'required|integer',
        ];
        $customMessages = [
            'lettreaccord.required' => 'Vous devez entrer un accord.',
            'etat.required' => 'Vous devez entrer un état.',
            'agessa.required' => 'Vous devez entrer un agessa',
            'facture.required' => 'Vous devez entrer une facture',
            'montant.required' => 'Vous devez entrer un montant',
            'montantn.required'  => 'Vous devez entrer un montant NET',
            'datepaiement.required' => 'Vous devez entrer une date de paiement',
            'numpigiste.required' => 'Vous devez entrer un numéro de pigiste',
            'nummagazine.required'  => 'Vous devez entrer un numéro de magazine',
        ];

        $request->validate($rules, $customMessages);

        $contrat->update($request->all());
        return redirect()->route('contrats.index')
            ->with('success','Contrat mis à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
        return redirect()->route('contrats.index')
            ->with('success','Contrat supprimé avec succès');
    }
}