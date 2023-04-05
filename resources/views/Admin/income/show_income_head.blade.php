

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">
      
    <div class=' d-flex justify-content-between '>
                        <div>
                        <a  href="{{route('income.view')}}" class="btn btn-info" > Back</a>
                        </div>
                        <div>
                        <a  class="btn btn-success" href="{{route('income.head')}}">Create Income</a>
                        </div>
                        </div>
    <div class="card mt-4">
   



                


                <div class='card-header'>
                            All Income Head
                        </div>
                    <div class="card-body">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Income Code</th>
      <th scope="col">Income Head</th>
      <th scope="col">Created_At</th>
      
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($incomes as $income)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$income->income_head}}</td>
        <td>{{Carbon\Carbon::parse($income->created_at)->diffForHumans()}}</td>
       
      </tr>
    @endforeach
  </tbody>
</table>

</div>
        </div>
    </div>

@endsection


