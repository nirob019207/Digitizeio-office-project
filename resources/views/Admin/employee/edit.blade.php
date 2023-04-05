





@extends('Admin.Admin_master')
@section('admin')







             
                            
<div class="py-12">
    <div class="container">
    



    @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif 
<form action="{{ url('employee/update/'.$employees->id)}}" method="POST">
                            @csrf

<div class="col-xxl">
                  <div class="card mb-4" style="background-color:#3e54ac">
                    
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Employee Name</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                name="emp_name"
                                
                                value="{{$employees->emp_name}}"
                                 
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Place</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                            <input
                                type="text"
                                class="form-control"
                                name="emp_place"
                                value="{{$employees->emp_place}}" 
                               
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Join Date</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                name="emp_join"
                                value="{{$employees->emp_join}}"
                               
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Employee Amount</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                name="emp_amount"
                                value="{{$employees->emp_amount}}"
                               
                              />
                            </div>
                          </div>
                        </div>
                       
                       
                          
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-info" style="margin-left:130px">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
</form>



                
        </div>
    </div>

@endsection
































