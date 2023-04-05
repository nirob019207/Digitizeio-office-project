<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Expanse;
use App\Models\EmployeeHead;
use App\Models\EapanseHead;
use Auth;
use Dompdf\Dompdf;

use Maatwebsite\Excel\Facades\Excel;
class ExpanseController extends Controller
{





   

    public function downloadExcel()
    {
        $expanses = DB::table('expanses')->get();
    
        $data = [];
        foreach ($expanses as $expanse) {
            $data[] = [
                'Sl No' => $expanse->id,
                'Expanse' => $expanse->exp_name,
                'Expanse Head' => $expanse->exp_head,
                'Amount' => $expanse->amount,
                'Comments' => $expanse->exp_textArea,
                'Created At' => Carbon::parse($expanse->created_at)->diffForHumans(),
            ];
        }
    
        return Excel::download(function($excel) use ($data) {
            $excel->sheet('sheet1', function($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1', false, false);
            });
        }, 'expanse_data.xlsx');
    }
    

   
    // public function expenses(Request $request) {
    //     $month = $request->input('month');
    //     $expenses = DB::table('expenditures')
    //                   ->select(DB::raw('SUM(amount) AS TOTAL_EXP'))
    //                   ->whereMonth('created_at', $month)
    //                   ->get();
    //     return view('expenses', ['expenses' => $expenses]);
    // }
    
    

    








    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');



    }
    public function expansView(){
        return view('admin.expanse_view');
    }


    //logout end

    //create head start 



    public function CreateHead(){
           
          $expanses = EapanseHead::all();
        
        
        return view('admin.expanse.create_expanse_head',compact('expanses'));
    }



    public function AddExpHead(Request $request)
{
    $validateData = $request->validate([
        'exp_head' => 'required|unique:eapanse_heads|max:255',
    ]);

    DB::table('eapanse_heads')->insert([
        'exp_head' => $request->exp_head,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->back()->with('success', 'Expanse Head Inserted Successfully');
}

public function showExphead(){
    $expanses = DB::table('eapanse_heads')->get();


    
    return view('Admin.expanse.show_expHead',compact('expanses'));
}  




public function Index(){
    return view ('pos.index');
}













public function CreateExp(){
    $expanses = DB::table('eapanse_heads')->get();
    
   // $expanses=Expanse::all();
  // $expanses = DB::table('expense_head')->pluck('EXP_HEAD', 'ID');
   return view('Admin.expanse.create_expanse',compact('expanses'));
}
public function showExp(){
$expanses=Expanse::all();
$employees =EmployeeHead::all();
return view('Admin.expanse.show_expanse',compact('expanses','employees'));
}


public function Addexp(Request $request){


   $validateData=$request->validate([
       'exp_name'=>'required|unique:Expanses|max:255',
      
   ]);


   Expanse::insert([
       'exp_name'=>$request->exp_name,
       'exp_head'=>$request->exp_head,
       'amount'=>$request->amount,
       'exp_textArea'=>$request->exp_textArea,
       'created_at'=>Carbon::now()
   ]);
return Redirect()->back()->with('success','Category Inserted Successful');

}



public function edit($id)
{
    

    $expanses = Expanse::find($id);

    return view('Admin.expanse.edit', compact('expanses'));
}

public function Update(Request $request,$id){
   $update=Expanse::find($id)->update([
       'exp_name'=>$request->exp_name,
       'exp_head'=>$request->exp_head,
       'amount'=>$request->amount,
       'exp_textArea'=>$request->exp_textArea,
   ]);
   return Redirect()->route('create.exp')->with('success','Category Updated Successful');
}

public function delete($id){
   DB::table('expanses')->where('id',$id)->delete();
   return back()->with('ff','Delete succesfull');
}





}
