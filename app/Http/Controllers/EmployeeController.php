<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\EmployeeHead;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function EmployeeView(){
        return view('admin.employee.employee_view');
    }


    public function EmployeeHead(){
        $users=User::all();
        $employee_name=DB::table('employees_name')->get();
        
          
        return view('admin.employee.employee_table_head',compact('users','employee_name'));
    }
  

    public function StoreEmp (Request $request)
{
    $validateData = $request->validate([
        'emp_name' => 'required|unique:employee_heads|max:255',
    ]);

    DB::table('employee_heads')->insert([
        'emp_name' => $request->emp_name,
        'emp_place'=>$request->emp_place,
        'emp_join'=>$request->emp_join,
        'emp_amount'=>$request->emp_amount,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('employee.show');

}
public function showEmp(){
    $employees = DB::table('employee_heads')->get();



    
    return view('Admin.employee.show_employee_table',compact('employees'));
}  




public function edit($id)
{
    

    $employees = EmployeeHead::find($id);

    return view('Admin.employee.edit', compact('employees'));
}

public function Update(Request $request,$id){
   $update=EmployeeHead::find($id)->update([
    'emp_name' => $request->emp_name,
    'emp_place'=>$request->emp_place,
    'emp_join'=>$request->emp_join,
    'emp_amount'=>$request->emp_amount,
   ]);
   return Redirect()->route('employee.show')->with('success','employee Updated Successful');
}

public function Delete($id){
   DB::table('employee_heads')->where('id',$id)->delete();
   return back()->with('ff','Delete succesfull');
}








//bill 




   


}