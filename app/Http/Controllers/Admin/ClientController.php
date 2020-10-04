<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'nomC' => 'required',
            'emailC' => 'required',
            'telC' => 'required',
            'adresseC' => 'required'

        ]);
        $client = new Client();
        $client->nomC = $request->nomC;
        $client->emailC = $request->emailC;
        $client->telC = $request->telC;
        $client->adresseC = $request->adresseC;

        $client->save();
        return redirect()->route('client.index')->with('successMsg','Client enregistré avec succes');
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
        $client = Client::find($id);
        return view('admin.client.edit',compact('client'));
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
            'nomC'=>'required',
            'emailC'=>'required',
            'telC'=>'required',
            'adresseC'=>'required'

        ]);

        $client = Client::find($id);
        $client->nomC = $request->nomC;
        $client->emailC = $request->emailC;
        $client->telC = $request->telC;
        $client->adresseC = $request->adresseC;
        $client->save();
        return redirect()->route('client.index')->with('successMsg','Client Modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->back()->with('successMsg','Client supprimée avec succes');
    }
}
