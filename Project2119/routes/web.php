<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//add to fix login-logged-logout-registerd fter first registration============================================


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
//added to fix login-logged-logout-registerd first registration==============================================


//Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');


Route::group(/*['middleware'=>'web']*/[], function () {

    //verify email
    Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
    Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
    //verify email

    Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::get('/portfolio/{portfolio}',['uses'=>'IndexController@detail','as'=>'detail']);
    Route::auth();
});


//user/
Route::group(['prefix'=>'user','middleware'=>'auth'], function () {

    Route::get('/',['uses'=>'ClientController@execute', 'as'=>'user']);
    Route::match(['get','post'],'/settings',['uses'=>'ClientController@settingsUser', 'as'=>'UserSettings']);


    Route::match(['get','post'],'/send',['uses'=>'smsController@execute','as'=>'sendSms']);
});


//admin/page or portfolio
Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {
   //admin
    Route::get('/', function () {
                                    $user_name = Auth::user()->name;
                                    $status = Auth::user()->status;
                                    if ($user_name == "admin" && $status=='1') {
                                        if (view()->exists('admin.index')) {
                                            $data = ['title'=>'Panel of ADMIN'];
                                            return view('admin.index',$data);
                                        }
                                    }
                                    elseif($user_name != "admin" && $status =='1') {
                                        return redirect('/user');
                                    }
                                    else {
                                        return "LOGOUT FROM SITE and FINISH REGISTERATION PLEASE!!! (_Let's Verify your email_)";
                                    }

        /*if (view()->exists('admin.index')) {
            $data = ['title'=>'Панель Андміна'];
            return view('admin.index',$data);
        }*/
    });

    //admin/pages
    Route::group(['prefix'=>'pages'], function () {
        //admin/pages
        Route::get('/',['uses'=>'PagesController@execute', 'as'=>'pages']);

        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);

        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);
    });


    //admin/portfolio
    Route::group(['prefix'=>'portfolios'], function () {
        //admin/portfolio
        Route::get('/',['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);

        //admin/portfolio/add
        Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);

        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);
    });


    Route::group(['prefix'=>'users'], function () {
        //admin/users
        Route::match(['get','post'],'/',['uses'=>'UsersController@execute','as'=>'users']);

        //admin/users/{user}
        Route::match(['get','post','delete'],'/edit/{user}',['uses'=>'UserEditController@execute','as'=>'userEdit']);

    });
    Route::group(['prefix'=>'feedback'], function () {
        //admin/feedback
        Route::match(['get','post'],'/',['uses'=>'FeedbackController@execute','as'=>'feedback']);

        //admin/feedback/open/{user}
        Route::match(['get','post','delete'],'/open/{user}',['uses'=>'OpenSmsController@execute','as'=>'OpenSms']);

    });
});
