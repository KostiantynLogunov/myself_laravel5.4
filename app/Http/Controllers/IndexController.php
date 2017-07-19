<?php

namespace App\Http\Controllers;

use App\Page;
use App\Portfolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function execute(Request $request) {

        $pages = Page::all();

        $portfolios = Portfolio::all();

//        dd($portfolios->toArray());

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu,$item);
        }

        $item = array('title'=>'Portfolio','alias'=>'Portfolio');
            array_push($menu,$item);
//        dd($menu);

        return view('site.index',array(
                                        'menu'=>$menu,
                                        'pages'=>$pages,
                                        'portfolios'=>$portfolios
        ));
    }

    public function detail($id) {
        $portfolios = Portfolio::all();
        return view('site.detali',[
            'name_prj'=>$portfolios->find($id)->name,
            'text_prj'=>$portfolios->find($id)->text,
            'img_prj'=>$portfolios->find($id)->images,
        ]);

    }
}
