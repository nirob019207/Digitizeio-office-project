<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function billRecipt(){
        $bills=DB::table('bills')->get();
    
        return view('admin.Bill.bill_recipt',compact('bills'));
    }
    public function billview(){
    
        return view('admin.Bill.bill_view');
    }
    public function regular(){
    
        return view('admin.Bill.bill_regular');
    }
    public function createBill(){
    
        return view('admin.Bill.create_bill');
    }
    public function Store (Request $request)
    {
        $validateData = $request->validate([
            'description' => 'required|unique:bills|max:255',
        ]);
    
        DB::table('bills')->insert([
            'description' => $request->description,
            'unit_price'=>$request->unit_price,
            'quantity'=>$request->quantity,
            'price_in_bdt'=>$request->price_in_bdt,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    
        return redirect()->route('bill.recipt')->with('success', 'Create Employee Head Successfully');
    }
    
}
