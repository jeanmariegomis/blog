<?php

namespace App\Http\Controllers\Admin;

use App\Stock;
use App\Client;
use App\Produit;
use App\Commande;
use App\Categorie;
use App\Reglement;
use Carbon\Carbon;
use App\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ConsoleTVs\Charts\Facades\Charts;

class DashboardController extends Controller
{
    public function index()
    {
        $categorieCount = Categorie::count();
        $clientCount = Client::count();
        $commandeCount = Commande::count();
        $fournisseurCount = Fournisseur::count();
        $produitCount = Produit::count();
        $reglementCount = Reglement::count();
        $stockCount = Stock::count();


        $pro = Produit::where('qte', 1)->get();
        $count = $pro->count();




            if ($count < 10){





            $produit = Produit::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
            $chart = Charts::database($produit, 'bar', 'highcharts')
                         ->title('Product Details')
                         ->elementLabel('Total Products')
                         ->dimensions(1000, 500)
                         ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                         ->groupByMonth(date('Y'), true);


            return view('admin.dashboard', compact('categorieCount', 'clientCount','count', 'commandeCount', 'fournisseurCount', 'produitCount', 'reglementCount', 'stockCount', 'chart', 'produit'));
        }
    }

}






