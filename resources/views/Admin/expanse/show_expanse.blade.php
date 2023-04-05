

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">


    
    <div class=' d-flex justify-content-between '>
                        <div class="d-flex">
                        <a  href="{{route('expanse.view')}}" class="btn btn-info" > Back</a>
                        <a href="{{ route('expanse.download') }}" class="btn btn-primary">Download Excel</a>
                        </div>
                        <div>
                        <a  href="{{route('create.exp')}}" class="btn btn-primary" >Create Expanse Head</a>
                        </div>
                        </div>
    <div class="card mt-4">
   



                


                <div class='card-header'>
                            All expanse
                        </div>
                    <div class="card-body">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Expanse </th>
      <th scope="col">Expanse Head</th>
      <th scope="col">Amount</th>
      <th scope="col">Comments</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($expanses as $expanse)
   <tr>
    @php($i=1)

    <th>{{$i++}}</th>
    <td>{{$expanse->exp_name}}</td>
    <td>{{$expanse->exp_head}}</td>
    <td>{{$expanse->amount}}</td>
    <td>{{$expanse->exp_textArea}}</td>
    
    <td>{{Carbon\Carbon::parse($expanse->created_at)->diffForHumans()}}</td>
    <td>
        <a href="{{url('expanse/edit/'.$expanse->id)}}" class="btn btn-info">Edit</a>
        <a href="{{url('expanse/delete/'.$expanse->id)}}" class="btn btn-info">Delete</a>
        

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
