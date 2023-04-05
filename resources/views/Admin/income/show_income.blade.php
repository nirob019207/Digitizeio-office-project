

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">


    
    <div class=' d-flex justify-content-between '>
                        <div>
                        <a  href="{{route('income.view')}}" class="btn btn-info" > Back</a>
                        </div>
                        <div>
                        <a  href="{{route('create.income')}}" class="btn btn-primary" >Create Income Head</a>
                        </div>
                        </div>
    <div class="card mt-4">
   



                


                <div class='card-header'>
                            All Income
                        </div>
                    <div class="card-body">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Income </th>
      <th scope="col">Income Head</th>
      <th scope="col">Amount</th>
      <th scope="col">Comments</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
     @foreach($incomes as $income)
   <tr>
   @php($i=1)

    <th>{{$i++}}</th>
    <td>{{$income->incoem_name}}</td>
    <td>{{$income->income_head}}</td>
    <td>{{$income->amount}}</td>
    <td>{{$income->income_textArea}}</td>
    
    <td>{{Carbon\Carbon::parse($income->created_at)->diffForHumans()}}</td>
    <td>
        <a href="{{url('income/edit/'.$income->id)}}" class="btn btn-info">Edit</a>
        <a href="{{url('income/delete/'.$income->id)}}" class="btn btn-info">Delete</a>
        

    </td>
   </tr>
   @endforeach
   
  <tbody>

   
</tbody>
   
</table>
</div>
        </div>
    </div>

@endsection
