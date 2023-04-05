<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpanseController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\BillController;
use App\Models\User;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
     
        $users=User::all();
        return view('admin.index',compact('users'));
    })->name('dashboard');
});
Route::get('/pos/view',[ExpanseController::class,'Index'])->name('pos.view');

Route::get('/expanse/view',[ExpanseController::class,'expansView'])->name('expanse.view');

Route::get('/user/logout',[ExpanseController::class,'Logout'])->name('user.logout');


//expanse head

Route::get('/exp/head',[ExpanseController::class,'CreateHead'])->name('exp.head');
Route::post('/store/expanseHead',[ExpanseController::class,'AddExpHead'])->name('store.expHead');
Route::get('/show/expanseHead',[ExpanseController::class,'showExphead'])->name('show.expHead');







Route::get('/download/expanse',[ExpanseController::class,'downloadExcel'])->name('expanse.download');

Route::get('/create/expanse',[ExpanseController::class,'CreateExp'])->name('create.exp');
Route::post('/store/expanse',[ExpanseController::class,'addExp'])->name('store.exp');
Route::get('/show/expanse',[ExpanseController::class,'showExp'])->name('show.exp');


Route::get('/expanse/edit/{id}', [ExpanseController::class, 'Edit']);
Route::post('/expanse/update/{id}', [ExpanseController::class, 'Update']);
Route::get('/expanse/delete/{id}', [ExpanseController::class, 'Delete']);
Route::get('/expanse/dashboard',[ExpanseController::class,'ExDash'])->name('expanse.dashboard');



Route::controller(adminController::class)->group(function(){
    // Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('admin/profile','Profile')->name('admin.profile');
    Route::get('edit/profile','EditProfile')->name('edit.profile');
    Route::post('store/profile','StoreProfile')->name('store.profile');
});


///Employee route start

Route::controller(EmployeeController::class)->group(function(){
 
    Route::get('employee/view','EmployeeView')->name('employee.view');
    Route::get('employee/head','EmployeeHead')->name('employee.head');
    Route::post('store/employee','StoreEmp')->name('store.empHead');
    Route::get('employee/show','ShowEmp')->name('employee.show');


});

Route::get('/employee/edit/{id}', [EmployeeController::class, 'Edit']);   
Route::post('/employee/update/{id}', [EmployeeController::class, 'Update']);
Route::get('/employee/delete/{id}', [EmployeeController::class, 'Delete']);


// income start here
Route::get('/income/head',[IncomeController::class,'CreateHead'])->name('income.head');
Route::post('/store/incomeHead',[IncomeController::class,'AddIncomeHead'])->name('store.incomeHead');
Route::get('/show/incomeHead',[IncomeController::class,'showIncomehead'])->name('show.incomeHead');




Route::get('/income/view',[IncomeController::class,'IncomeView'])->name('income.view');



Route::get('/create/income',[IncomeController::class,'CreateIncome'])->name('create.income');
Route::post('/store/income',[IncomeController::class,'addIncome'])->name('store.income');
Route::get('/show/income',[IncomeController::class,'showIncome'])->name('show.income');


Route::get('/income/edit/{id}', [IncomeController::class, 'Edit']);
Route::post('/income/update/{id}', [IncomeController::class, 'Update']);
Route::get('/income/delete/{id}', [IncomeController::class, 'Delete']);


///billl

Route::get('/bill/recipt',[BillController::class,'billRecipt'])->name('bill.recipt');
Route::get('/bill/view',[BillController::class,'billview'])->name('bill.view');
Route::get('/bill/regrlar',[BillController::class,'regular'])->name('bill.regular');
Route::get('/bill/create',[BillController::class,'createBill'])->name('create.bill');


Route::post('/bill/store',[BillController::class,'Store'])->name('bill.store');


Route::get('/expense-income', [adminController::class, 'expenseIncome'])->name('expense.income');