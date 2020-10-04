<?php

namespace App\Http\Controllers\Admin;

use App\Produit;
use App\Categorie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produit.index',compact('produits'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.produit.create',compact('categories'));
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
            'categorie' => 'required',
            'nomP' => 'required',
            'prix' => 'required',
            'qte' => 'required',
            'imageP' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imageP');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/produit'))
            {
                mkdir('uploads/produit', 0777 , true);
            }
            $image->move('uploads/produit',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $produit = new Produit();
        $produit->categorie_id = $request->categorie;
        $produit->nomP = $request->nomP;
        $produit->prix = $request->prix;
        $produit->qte = $request->qte;
        $produit->imageP = $imagename;
        $produit->save();
        return redirect()->route('produit.index')->with('successMsg','Produit Ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.produit.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();
        return view('admin.produit.edit',compact('produit', 'categories'));
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
            'categorie' => 'required',
            'nomP' => 'required',
            'prix' => 'required',
            'qte' => 'required',
            'imageP' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $produit = Produit::find($id);
        $image = $request->file('imageP');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/produit'))
            {
                mkdir('uploads/produit', 0777 , true);
            }
            $image->move('uploads/produit',$imagename);
        }else {
            $imagename = $produit->imageP;
        }
        $produit->categorie_id = $request->categorie;
        $produit->nomP = $request->nomP;
        $produit->prix = $request->prix;
        $produit->qte = $request->qte;
        $produit->imageP = $imagename;
        $produit->save();
        return redirect()->route('produit.index')->with('successMsg','Produit Modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        if (file_exists('uploads/produit/'.$produit->imageP))
        {
            unlink('uploads/produit/'.$produit->imageP);
        }
        $produit->delete();
        return redirect()->back()->with('successMsg',' Produit Supprimée avec succes');
    }

        public function produitChart()
        {
            return view('admin.produit.index');

        }
    }

