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

//Frontend routes


	// Route::post('/bookingdone','LoanController@createbook')->name('booking.create');

	Route::group(['middleware'=>'auth'],function(){


		Route::namespace('Frontend')->group(function () {


			Route::get('/LoanApply/{id}','LoanController@apply')->name('loan.apply');

});

		});


	Route::namespace('Frontend')->group(function () {


	Route::get('/', 'HomeController@entrypage')->name('entrypage');
	
	Route::get('/booking/{id}','LoanController@booking')->name('booking');
	//Route::get('/bookingdone/{id}','LoanController@bookingdone')->name('bookingdone');

	Route::get('/entrypage','HomeController@entrypage')->name('entrypage');

    // Controllers Within The "App\Http\Controllers\Admin" Namespace
	Route::get('/index', 'HomeController@index')->name('index');
	

	Route::get('/test','HomeController@test')->name('test');

	Route::post('/search/loan', 'HomeController@searchLoan')->name('search.loan');
	
	Route::get('/loan/view/{id}','HomeController@viewLoan')->name('loan.view');

	Route::get('/loan','LoanController@loan')->name('loan');

	Route::get('/drophome/{id}','HomeController@drophome')->name('drophome');


	Route::get('/homeloan/view/{id}','HomeController@homeloan')->name('homeloan');
	Route::get('/carloan', 'HomeController@carloan')->name('carloan');

	Route::get('/about','HomeController@about')->name('about');
	Route::get('/faq','HomeController@faq')->name('faq');
	Route::get('/mission','HomeController@mission')->name('mission');
	Route::get('/relation','HomeController@relation')->name('relation');

	Route::get('/bankreview','HomeController@bankreview')->name('bankreview');



	Route::get('/homeform','LoanController@homeform')->name('homeform');
	Route::get('/carform','LoanController@carform')->name('carform');
	Route::get('/personalform','LoanController@personalform')->name('personalform');

	

	
	//Route::post('/LoanApply/create','LoanController@create')->name('loan.create');
	
    


	
    Route::get('/registration','UserController@showRegForm')->name('registrationfrom');
    Route::post('/registrationdone','UserController@showLoginForm')->name('do.registration');

    Route::get('/login/form','UserController@login')->name('login');
	Route::post('/logindone','UserController@doLogin')->name('do.login');
	Route::get('/logout','UserController@logout')->name('logout');

});




//Backend Routes
	Route::group(['middleware'=>'auth', 'namespace' => 'Backend'],function(){
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

		//Admin CRUD
	Route::get('/admin','AdminController@admin')->name('admin');
	Route::get('/adminform','AdminController@adminform')->name('adminform');
	Route::post('/adminform/create','AdminController@create')->name('adminform.create');
	Route::get('/adminview','AdminController@adminview')->name('adminview');
	Route::get('/adminSingle/{id}','AdminController@adminSingle')->name('adminSingle');
	Route::get('/adminUpdate/edit/{id}','AdminController@edit')->name('adminEdit');
	Route::post('/adminUpdate/{id}','AdminController@update')->name('adminUpdate');
	Route::get('/adminDelete/{id}','AdminController@delete')->name('adminDelete');
	
	Route::post('admin/search', 'AdminController@search')->name('search');
	Route::get('/adminSinglePrint/{id}', 'AdminController@singleprint')->name('adminSinglePrint');
	Route::get('/adminPrint', 'AdminController@print')->name('adminPrint');

	//customer profile,loanlist
	Route::get('/customerloan','AdminController@customerloan')->name('customerloan');
	Route::get('/customerloanlist/{id}','AdminController@customerloanlist')->name('customerloan.single');
	Route::get('/customerloanapprove/{id}','AdminController@customerloanapprove')->name('customerloan.approve');
	Route::get('/customerAllList','AdminController@customerAll')->name('customerAll');
	Route::get('/customerpro','AdminController@customerpro')->name('customerpro');


	//bank CRUD
	Route::get('/bank','BankController@bank')->name('bank');
	Route::post('/bank/create','BankController@create')->name('bank.create');
	Route::get('/banklist','BankController@banklist')->name('banklist');
	Route::get('/banklistView/{id}','BankController@banklistView')->name('banklistView');
	Route::get('/bankUpdate/edit/{id}','BankController@edit')->name('bankEdit');
	Route::post('/bankUpdate/{id}','BankController@update')->name('bankUpdate');
	Route::get('/bankDelete/{id}','BankController@delete')->name('bankDelete');
	Route::post('bank/search', 'BankController@search')->name('banksearch');
	Route::get('/bankSinglePrint/{id}', 'BankController@singleprint')->name('bankSinglePrint');
	Route::get('/bankPrint', 'BankController@print')->name('bankPrint');


	//loantype CRUD
	Route::get('/loantypeform','LoanTypeController@loantype')->name('loantype');
	Route::post('/loantype/create','LoanTypeController@create')->name('loantype.create');
	Route::get('/loantypelist','LoanTypeController@loantypelist')->name('loantypelist');
	Route::get('/loantypelist/{id}','LoanTypeController@loantypeSingleView')->name('loantypeSingleView');
	Route::get('/loantypeUpdate/edit/{id}','LoanTypeController@edit')->name('loantypeEdit');
	Route::post('/loantypeUpdate/{id}','LoanTypeController@update')->name('loantypeUpdate');
	Route::get('loantypeDelete/{id}','LoanTypeController@delete')->name('loantypeDelete');
	Route::post('loantype/search','LoanTypeController@search')->name('Lsearch');
	Route::get('/typeSinglePrint/{id}', 'LoanTypeController@typesingleprint')->name('typeSinglePrint');
	Route::get('/typePrint', 'LoanTypeController@print')->name('typePrint');

	
	
	//lpaninformation  CRUD
	Route::get('/loaninfo/form','LoaninfoController@loaninfohome')->name('loaninfohome');
	Route::post('/loaninfo/create','LoaninfoController@create')->name('loaninfohome.create');
	Route::get('/loaninfo','LoaninfoController@loaninfohomeview')->name('loaninfohomeview');
	Route::get('/loaninfo/{id}','LoaninfoController@HomeSingleView')->name('HomeSingleView');
	Route::post('loaninfo/search', 'LoaninfoController@search')->name('home.search');
	Route::get('/homeSinglePrint/{id}', 'LoaninfoController@homesingleprint')->name('HomeSinglePrint');
	Route::get('/homePrint', 'LoaninfoController@homeprint')->name('homePrint');
	Route::get('/homeUpdate/edit/{id}','LoaninfoController@homeedit')->name('homeEdit');
	Route::post('/homeUpdate/{id}','LoaninfoController@homeupdate')->name('homeUpdate');
	
	Route::get('/detailsview','LoaninfoController@detailsview')->name('detailsview');

	Route::get('/loaninfocar','LoaninfoController@loaninfocar')->name('loaninfocar');
	Route::post('/loaninfocar/create','LoaninfoController@CreateCar')->name('loaninfocar.create');
	Route::get('/loaninfocarview','LoaninfoController@LoanInfoCarView')->name('LoanInfoCarView');
	Route::get('/loaninfocar/{id}','LoaninfoController@CarSingleView')->name('CarSingleView');
	Route::get('/carUpdate/edit/{id}','LoaninfoController@caredit')->name('carEdit');
	Route::post('/carUpdate/{id}','LoaninfoController@carupdate')->name('carUpdate');


	Route::get('/loaninfopersonal','LoaninfoController@loaninfopersonal')->name('loaninfopersonal');
	Route::post('/loaninfopersonal/create','LoaninfoController@createPersonal')->name('loaninfopersonal.create');
	Route::get('/loaninfopersonalView','LoaninfoController@personalView')->name('loaninfopersonalView');
	Route::get('/loaninfopersonal/{id}','LoaninfoController@personalSingleView')->name('PersonalSingleView');
	Route::get('/personalUpdate/edit/{id}','LoaninfoController@personaledit')->name('personalEdit');
	Route::post('/personalUpdate/{id}','LoaninfoController@personalupdate')->name('personalUpdate');



	//customer CRUD
	Route::get('/customerform','CustomerController@customerform')->name('customerform');
	Route::post('/customerform/create','CustomerController@create')->name('customerform.create');
	Route::get('/customerview','CustomerController@customerview')->name('customerview');
	Route::get('/customerSingle/{id}','CustomerController@customerSingle')->name('customerSingle');
	Route::post('customer/search','CustomerController@search')->name('Csearch');
	Route::get('/customerSinglePrint/{id}','CustomerController@singleprint')->name('customerSinglePrint');
	Route::get('/customerPrint','CustomerController@print')->name('customerPrint');
	Route::get('/customerUpdate/edit/{id}','CustomerController@edit')->name('customerEdit');
	Route::post('/customerUpdate/{id}','CustomerController@update')->name('customerUpdate');



	Route::get('/loanReport','AdminController@loanReport')->name('loanReport');
	Route::post('/loanReport','AdminController@showLoanReport')->name('showLoanReport');
	Route::get('/LoanReportPrint', 'AdminController@Reportprint')->name('Reportprint');
	Route::get('/loanDelete/{id}','AdminController@loandelete')->name('loanDelete');

});














//Route::post('/loan/create','LoanTypeController@create')->name('loantype.create');
//Route::get('/loanlist','LoanTypeController@loantypelist')->name('loantypelist');

//demo route
//Route::get('/homeloan/{id}','HomeController@homeloan');
