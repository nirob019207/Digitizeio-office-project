<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class adminController extends Controller
{
    public function Profile(){
        $id=Auth::user()->id;
        $adminData=User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
        
    }
    public function EditProfile(){
        $id=Auth::user()->id;
        $employees = DB::table('employee_heads')->get();
        $editData=User::find($id,);
    

        return view('admin.admin_profile_edit',compact('editData','employees'));
        

    }
    public function StoreProfile(Request $request){
        $id=Auth::user()->id;
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        
        if ($request->file('profile_image')){
            $file=$request->file('profile_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
    
    
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image']=$filename;
    
    
        }
        $data->save();
        $notification= array(
            'message'=>'Admin profile updated succesfully',
            
            'alert-type'=>'success'
        );
    
        return redirect()->route('admin.profile')->with($notification);        
    }



public function expenseIncome(Request $request)
{
    $month = $request->input('month');

    // Calculate total income and expenses for the selected month using your existing code
    $totalIncomes = DB::table('incomes')
        ->select(DB::raw('SUM(amount) AS TOTAL_Inc'))
        ->where('created_at', '>', Carbon::now()->subMonth())
        ->get();

    $totalExpenses = DB::table('expanses')
        ->select(DB::raw('SUM(amount) AS TOTAL_EXP'))
        ->where('created_at', '>', Carbon::now()->subMonth())
        ->get(); // <-- Complete the get() method

    

    // Check if $totalIncomes and $totalExpenses are set
    if(isset($totalIncomes) && isset($totalExpenses)) {
        // Calculate the difference between the total incomes and total expenses
        $totalIncomeExpense = $totalIncomes[0]->TOTAL_Inc - $totalExpenses[0]->TOTAL_EXP;
    }else{
        $totalIncomeExpense=0;
    }

    // Pass $totalIncomeExpense to the view
    return view('admin.index', [
        'totalIncomes' => $totalIncomes,
        'totalExpenses' => $totalExpenses,
        'totalIncomeExpense' => $totalIncomeExpense
    ]);
}

}    
