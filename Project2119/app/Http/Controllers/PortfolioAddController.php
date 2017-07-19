<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Validator;
use Illuminate\Http\Request;

class PortfolioAddController extends Controller
{
    //
    public function execute(Request $request) {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input,[
                'name' => 'required|max:50|unique:portfolios,name',
                'filter' => 'required|max:50',
                'images' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }

            if ($request->hasFile('images')) {
                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img/portfolio/',$input['images']);
            }

            $portfolio = new Portfolio($input);
            $portfolio->fill($input);

            if ($portfolio->save()) {
                return redirect('admin')->with('status','Portfolio was added !');
            }



        }

        if (view()->exists('admin.portfolios_add')) {
            $data = [
                'title'=> 'New Portfolio'
            ];
            return view('admin.portfolios_add',$data);
        }
        abort(404);
    }
}
