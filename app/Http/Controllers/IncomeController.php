<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Expanse;
use App\Models\Income;
use App\Models\incomeHead;
use App\Models\EmployeeHead;
use App\Models\EapanseHead;
use Auth;
class IncomeController extends Controller
{
    
    public function IncomeView(){
        return view('admin.income.income_view');
    }


    //logout end

    //create head start 



    public function CreateHead(){
           
          $incomes = IncomeHead::all();
        
        
        return view('admin.income.create_income_head',compact('incomes'));
    }



    public function AddIncomeHead(Request $request)
{
    $validateData = $request->validate([
        'income_head' => 'required|unique:income_heads|max:255',
    ]);

    DB::table('income_heads')->insert([
        'income_head' => $request->income_head,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->back()->with('success', 'Expanse Head Inserted Successfully');
}

public function showIncomehead(){
    $incomes = DB::table('income_heads')->get();


    
    return view('Admin.income.show_income_head',compact('incomes'));
}  


















public function CreateIncome(){
    $incomes = DB::table('income_heads')->get();
    
   // $expanses=Expanse::all();
  // $expanses = DB::table('expense_head')->pluck('EXP_HEAD', 'ID');
   return view('Admin.income.create_income',compact('incomes'));
}
public function showIncome(){
$incomes=Income::all();

return view('Admin.income.show_income',compact('incomes'));
}


public function AddIncome(Request $request){


   $validateData=$request->validate([
       'incoem_name'=>'required|unique:Income|max:255',
      
   ]);


   Income::insert([
       'incoem_name'=>$request->incoem_name,
       'income_head'=>$request->income_head,
       'amount'=>$request->amount,
       'income_textArea'=>$request->income_textArea,
       'created_at'=>Carbon::now()
   ]);
return Redirect()->back()->with('success','income Inserted Successful');

}



public function edit($id)
{
    

    $incomes = Income::find($id);

    return view('Admin.income.edit', compact('incomes'));
}

public function Update(Request $request,$id){
   $update=Income::find($id)->update([
       'incoem_name'=>$request->incoem_name,
       'income_head'=>$request->income_head,
       'amount'=>$request->amount,
       'income_textArea'=>$request->income_textArea,
   ]);
   return Redirect()->route('create.income')->with('success','income Updated Successful');
}

public function delete($id){
   DB::table('incomes')->where('id',$id)->delete();
   return back()->with('ff','Delete succesfull');
}









}
