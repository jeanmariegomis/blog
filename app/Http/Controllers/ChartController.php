<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;

class ChartController extends Controller
{
    public function index()
    {
         $produits = Produit::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
         $chart = Charts::database($produits, 'bar', 'highcharts')
                     ->title('Product Details')
                     ->elementLabel('Total Products')
                     ->dimensions(1000, 500)
                     ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                     ->groupByMonth(date('Y'), true);
        return view('charts', ['chart' => $chart]);
    }
}
