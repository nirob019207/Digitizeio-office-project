

@extends('Admin.Admin_master')
@section('admin')


<div class="container">
<div>
    <h2 class="text-center"></h2>

  </div>
  <div class="row">

 

    <div class="col-md-6">
       <div class="card mt-4 p-4 ">
       
        <div class="card-body text-center">
         
         
          <a  href="{{route('bill.regular')}}" class="btn btn-primary" > Regular Bill</a>
        </div>
      </div> 
    </div>
    <div class="col-md-6 ">
      <div class="card mt-4 p-4 ">
        
        <div class="card-body text-center">
         
          
          <a class="btn btn-info"href="{{route('bill.recipt')}}" >New Type Bill</a>
        </div>
      </div>
    </div>
    





  </div>
</div>









@endsection


