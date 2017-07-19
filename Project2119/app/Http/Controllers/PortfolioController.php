<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function execute() {
        if (view()->exists('admin.portfolios')) {
            $portfolios = Portfolio::all();

            $data1 = [
                'title'=>'My works',
                'portfolios'=>$portfolios
            ];
            return view('admin.portfolios',$data1);
        }
        abort(404);
    }
}
