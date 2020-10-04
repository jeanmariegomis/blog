<?php

namespace App\Http\Controllers\Admin;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Stock;
use Illuminate\Http\Request;

class EntreeStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('admin.entreestock.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = Produit::all();
        $fournisseurs = Fournisseur::all();

        return view('admin.entreestock.create',compact('produits','fournisseurs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'produit' => 'required',
            'fournisseur' => 'required',
            'prixS' => 'required',
            'qteS' => 'required',
            'date' => 'required',
        ]);
  

        $stock = new Stock();
        $var1 = rand(99999,1111);
        $random = ($var1);
        $stock->produit_id = $request->produit;
        $stock->fournisseur_id = $request->fournisseur;
        $stock->prixS = $request->prixS;
        $stock->qteS = $request->qteS;
        $stock->date = $request->date;
        $stock->numero = $random;


        $stock->save();
        return redirect()->route('entreestock.index')->with('successMsg','Stock Ajouter avec succes');
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
        $stock = Stock::find($id);
        $produits = Produit::all();
        $fournisseurs = Fournisseur::all();
        return view('admin.entreestock.edit',compact('stock', 'produits', 'fournisseurs'));
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
            'produit' => 'required',
            'fournisseur' => 'required',
            'prixS' => 'required',
            'qteS' => 'required',
            'date' => 'required',
        ]);
        $stock = Stock::find($id);
       
        $var1 = rand(99999,1111);
        $random = ($var1);
        $stock->produit_id = $request->produit;
        $stock->fournisseur_id = $request->fournisseur;
        $stock->prixS = $request->prixS;
        $stock->qteS = $request->qteS;
        $stock->date = $request->date;
        $stock->numero = $random;
        $stock->save();
        return redirect()->route('entreestock.index')->with('successMsg','Stock Modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
     
        $stock->delete();
        return redirect()->back()->with('successMsg',' Stock Supprimée avec succes');
    }
}
