<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Validator;
use Illuminate\Http\Request;

class PortfolioEditController extends Controller
{
    //
    public function execute(Portfolio $portfolio, Request $request) {

        if ($request->isMethod('delete')) {
            $portfolio -> delete();
            return redirect('admin/portfolios')->with('status','Portfolio deleted');
        }

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name' => 'required|max:50',
                'filter' => 'required|max:50',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('portfolioEdit',['page'=>$input['id']])
                    ->withErrors($validator);
            }

            if($request->hasFile('images')) {
                $file = $request->file('images');
                $file -> move(public_path().'/assets/img/portfolio/',$file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            }
            else {
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);
//            dd($input);
            $portfolio -> fill($input);

            if ($portfolio->update()) {
                return redirect('admin')->with('status','Portfolio was edited');
            }
        }

        $old = $portfolio->toArray();

        if (view()->exists('admin.portfolios_edit')) {

            $data = [
                'title' => 'Editing portfolio '.$old['name'],
                'data' => $old
            ];
            return view('admin.portfolios_edit',$data);


        }

    }
}
