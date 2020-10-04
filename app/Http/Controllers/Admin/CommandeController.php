<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Commande;
use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::all();
        return view('admin.commande.index',compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = Produit::all();
        $clients = Client::all();
        return view('admin.commande.create',compact('produits', 'clients'));
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
            'client' => 'required',
            'prixCo' => 'required',
            'qteCo' => 'required',
            'date' => 'required',            
            
        ]);

        $commande = new Commande();
        $commande->produit_id = $request->produit;
        $id = $commande->produit_id;
        $commande->client_id = $request->client;
        $commande->prixCo = $request->prixCo;
        $commande->qteCo = $request->qteCo;
        $commande->date = $request->date;   
        $produit = Produit::find($id);
        $quantite = $produit->qte;
        Produit::where('id',$id)->update(['qte'=>$quantite - $request->qteCo]);
        $commande->save();

        return redirect()->route('commande.index')->with('successMsg','Commande Enregistrée avec succes');
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
        $commande = Commande::find($id);
        $produits = Produit::all();
        $clients = Client::all();
        return view('admin.commande.edit',compact('commande', 'produits', 'clients'));
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
        {
            $this->validate($request,[
                'produit' => 'required',
                'client' => 'required',
                'prixCo' => 'required',
                'qteCo' => 'required',
                'date' => 'required',
            ]);
            $commande = Commande::find($id);
            $commande->produit_id = $request->produit;
            $commande->client_id = $request->client;
            $commande->prixCo = $request->prixCo;     
            $commande->qteCo = $request->qteCo;     
            $commande->date = $request->date;     
            $commande->save();
            return redirect()->route('commande.index')->with('successMsg','Commande Modifier avec succes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = Commande::find($id);
        $commande->delete();
        return redirect()->back()->with('successMsg',' Commande Supprimée avec succes');
    }
}
