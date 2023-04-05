

@extends('Admin.Admin_master')
@section('admin')


<div class="container">
  <div class="row">
    <!-- <div class="col-md-6">
      <div class="card mt-4 p-4 ">
       
        <div class="card-body text-center">
         
         
          <a  href="{{route('exp.head')}}" class="btn btn-primary" >Create Expanse Head</a>
        </div>
      </div>
    </div> -->
    <div class="col-md-6 ">
      <div class="card mt-4 p-4 ">
        
        <div class="card-body text-center">
         
          
          <a class="btn btn-info"href="{{route('show.incomeHead')}}" >Show Income Head</a>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-6">
      <div class="card mt-4 p-4 ">
       
        <div class="card-body text-center">
        
         
          
          <a  class="btn btn-success" href="{{route('create.exp')}}">Create Expanse</a>
        </div>
      </div>
    </div> -->
    <div class="col-md-6">
      <div class="card mt-4 p-4  ">
        
        <div class="card-body text-center">
          
          
          <a  class="btn btn-danger "href="{{route('show.income')}}">Show Income</a>
        </div>
      </div>
    </div>







  </div>
</div>









@endsection


