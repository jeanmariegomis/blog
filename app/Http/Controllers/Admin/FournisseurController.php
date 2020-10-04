<?php

namespace App\Http\Controllers\Admin;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view('admin.fournisseur.index',compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fournisseur.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request,[
                'nomF' => 'required',
                'emailF' => 'required',
                'telF' => 'required',
                'adresseF' => 'required'

            ]);
            $fournisseur = new Fournisseur();
            $fournisseur->nomF = $request->nomF;
            $fournisseur->emailF = $request->emailF;
            $fournisseur->telF = $request->telF;
            $fournisseur->adresseF = $request->adresseF;

            $fournisseur->save();
            return redirect()->route('fournisseur.index')->with('successMsg','Fournisseur enregistré avec succes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('admin.fournisseur.edit',compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomF'=>'required',
            'emailF'=>'required',
            'telF'=>'required',
            'adresseF'=>'required'

        ]);

        $fournisseur = Fournisseur::find($id);
        $fournisseur->nomF = $request->nomF;
        $fournisseur->emailF = $request->emailF;
        $fournisseur->telF = $request->telF;
        $fournisseur->adresseF = $request->adresseF;

        $fournisseur->save();
        return redirect()->route('fournisseur.index')->with('successMsg','Fournisseur Modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        
        $fournisseur->delete();
        return redirect()->back()->with('successMsg',' Produit Supprimée avec succes');
    }
}
