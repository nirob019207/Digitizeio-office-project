

@extends('Admin.Admin_master')
@section('admin')


<div class="container">
<div>
    <h2 class="text-center"></h2>

  </div>
  <div class="row">

 

    <!-- <div class="col-md-6">
       <div class="card mt-4 p-4 ">
       
        <div class="card-body text-center">
         
         
          <a  href="{{route('employee.head')}}" class="btn btn-primary" > Create Employee Table</a>
        </div>
      </div> 
    </div> -->
    <div class="col-md-6 ">
      <div class="card mt-4 p-4 ">
        
        <div class="card-body text-center">
         
          
          <a class="btn btn-info"href="{{route('employee.show')}}" >Show Duty Expanses</a>
        </div>
      </div>
    </div>
    





  </div>
</div>









@endsection


