

@extends('Admin.Admin_master')
@section('admin')


       <div class='container'>


       <div class=' d-flex justify-content-between '>
                        <div>
                        <a  href="{{route('bill.view')}}" class="btn btn-info" > Back</a>
                        </div>
                        <div>
                        <a  href="{{route('create.bill')}}" class="btn btn-primary" >Create Bill</a>
                        </div>
                        </div>
   
        <div class="card mt-4" style="color:black;">
            
            <h1 class="text-center">Bill</h1>


            <div class="card-body ml-2 mt-4 mb-4">
            <p>Date: {{ date('d-F-Y') }}</p>

        <p>   Invoice No: 710040</p>
<p>Item # Information Technology Service Consultancy and Maintenance for Sonali Life</p> 
<p>Insurance Company Limited for Month of February, 2023</p>
<p>Description Unit Price Quantity Price in BDT</p>
<p>Information Technology Serve</p>





<table class="table mt-4">
  <thead>
    <tr style="background-color:darkgrey;">
       <th scope="col">Sl No</th>
      <th scope="col">Discription</th>
      <th scope="col">Unit Price </th>
      <th scope="col">Quantity</th>
      <th scope="col">Price in BDT</th>
      
      
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>



<div class="mt-4">



<p>
Online Payment Details: <br>
Bank A/C: 1223602086001 <br>
Branch Name: MOUCHAK BRANCH, THE CITY BANK LTD <br>
Routing Number: 225274361 <br>
Sincerely Yours, <br><br><br><br>


Rashedul Hasan <br>
Chief Consultant, DIGITIZEIO <br>
</p>
</div>

            </div>







        </div>

    
       </div>









@endsection


