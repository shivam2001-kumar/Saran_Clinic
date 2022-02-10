<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin;
use App\Http\Controllers\SupervisorCont;
use App\Http\Controllers\StockmanagerController;
use App\Http\Controllers\recptionist;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superadmin',[superadmin::class,'index']);
Route::post('/superadminlogin',[superadmin::class,'superadminlogin']);
//admin route with middleware
Route::group(['middleware'=>['admin']],function(){

Route::get('/superadmin/supdash',[superadmin::class,'dashboard']);
Route::get('/superadmin/addsupervisor',[superadmin::class,'addsupervisor']);
Route::post('/superadmin/addsupercode',[superadmin::class,'addsupercode']);
Route::get('/superadmin/viewsupervisor',[superadmin::class,'viewsupervisor']);
Route::get('/superadmin/updatesupervisor/{id}/{status}',[superadmin::class,'updatesupervisor']);
Route::get('/superadmin/delsupervisor/{id}',[superadmin::class,'delsupervisor']);
Route::get('/superadmin/addpatient',[superadmin::class,'addpatient']);
Route::post('/superadmin/addpatientcode',[superadmin::class,'addpatientcode']);
Route::get('/superadmin/viewpatient',[superadmin::class,'viewpatient']);
Route::get('/superadmin/editpatient/{id}',[superadmin::class,'editpatient']);
Route::post('/superadmin/editpostpatientcode',[superadmin::class,'editpostpatientcode']);
Route::get('/superadmin/delpatient/{id}',[superadmin::class,'delpatient']);
Route::get('/superadmin/reception',[superadmin::class,'reception']);
Route::post('/superadmin/fetchprec',[superadmin::class,'fetchprec']);
Route::post('/superadmin/fetchmed',[superadmin::class,'fetchmed']);
Route::post('/superadmin/addreceipt',[superadmin::class,'addreceipt']);
Route::get('/superadmin/patient_reciepts/{id}',[superadmin::class,'patient_reciepts']);
Route::get('/superadmin/patient_rec_medcs/{id}/{pid}',[superadmin::class,'patient_rec_medcs']);
Route::post('/superadmin/outer_med_data',[superadmin::class,'outer_med_data']);
Route::get('/superadmin/getmobdata/{mob}',[superadmin::class,'getmobdata']);

});






// Supervisor
Route::get('/supervisor/login/{role}',[SupervisorCont::class,'login']);
Route::post('/supervisor/suplogin',[SupervisorCont::class,'suplogin']);



//stock-manager route with middleware
Route::group(['middleware'=>['stock']],function(){

//Route of stock Manager
Route::get('/stockmanager/dashboard',[StockmanagerController::class,'dashboard']);
Route::get('/stockmanager/add-stock',[StockmanagerController::class,'addstock']);
Route::post('/stockmanager/save-stock',[StockmanagerController::class,'saveStock']);
Route::get('/stockmanager/view-stock',[StockmanagerController::class,'viewstock']);
Route::get('/stockmanager/update-stock/{id}',[StockmanagerController::class,'updatestock']);
Route::post('/stockmanager/saveupdate-stock',[StockmanagerController::class,'saveUpdateStock']);
Route::get('/stockmanager/gen_billid',[StockmanagerController::class,'gen_billid']);

});


// Recptionist 

Route::get('recptionist/login/{role}',[SupervisorCont::class,'login']);

//Receptionist route with middleware
Route::group(['middleware'=>['receptionist']],function(){
    
Route::get('/recptionist/dashboard',[recptionist::class,'dashboard']);
Route::get('/recptionist/todayrecpt',[recptionist::class,'todayrecpt']);
Route::get('/recptionist/reciepts/{rid}/{pid}',[recptionist::class,'todayreciepts']);
Route::post('/recptionist/generateptbill',[recptionist::class,'generateptbill']);
Route::get('/recptionist/printreceipt/{rec_id}',[recptionist::class,'printreceipt']);
Route::get('/recptionist/bill/{receipt_id}',[recptionist::class,'bill']);
});


Route::get('/logout',function(){

  
       Session::flush();
      
            Session::flash('msg','Logout Successfully');
           return redirect('/');
        
  
});


