<?php

namespace App\Http\Controllers;
use App\Models\Contrat;
use App\Models\Pigiste;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view('magazines.index',compact('magazines'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazines.create');
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
            'bouclage' => 'required|date',
            'sortie' => 'required|date',
            'paiement' => 'required|date',
            'budget' => 'required|numeric',
        ];
        $customMessages = [
            'bouclage.required' => 'Vous devez entrer une date de bouclage.',
            'sortie.required' => 'Vous devez entrer une date de sortie.',
            'paiement.required' => 'Vous devez entrer une date de paiement',
            'budget.required' => 'Vous devez entrer un budget',
        ];
        $request->validate($rules, $customMessages);


        Magazine::create($request->all());
        return redirect()->route('magazines.index')
            ->with('success','Magazine ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazine)
    {
        return view('magazines.show',compact('magazine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazine)
    {
        return view('magazines.edit',compact('magazine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magazine $magazine)
    {
        /**
         * Gestion des erreurs de saisie
         */
        $rules = [
            'bouclage' => 'required|date',
            'sortie' => 'required|date',
            'paiement' => 'required|date',
            'budget' => 'required|numeric',
        ];
        $customMessages = [
            'bouclage.required' => 'Vous devez entrer une date de bouclage.',
            'sortie.required' => 'Vous devez entrer une date de sortie.',
            'paiement.required' => 'Vous devez entrer une date de paiement',
            'budget.required' => 'Vous devez entrer un budget',
        ];
        
        $request->validate($rules, $customMessages);

        $magazine->update($request->all());
        return redirect()->route('magazines.index')
            ->with('success','Magazine mis à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        $magazine->delete();
        return redirect()->route('magazines.index')
            ->with('success','Magazine supprimé avec succès');
    }
}