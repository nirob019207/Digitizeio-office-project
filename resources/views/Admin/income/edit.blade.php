

































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
<form action="{{ url('income/update/'.$incomes->id)}}" method="POST">
                            @csrf

<div class="col-xxl">
                  <div class="card mb-4" style="background-color:#3e54ac">
                    
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Expanse</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                name="incoem_name"
                                
                                value="{{$incomes->incoem_name}}"
                                 
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Imome Head</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                            <input
                                type="text"
                                class="form-control"
                                name="income_head"
                                value="{{$incomes->income_head}}"
                               
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Amount</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                name="amount"
                                value="{{$incomes->amount}}"
                               
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" style="color:white">Comments</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              
                              <!-- <input
                                type="text"
                                class="form-control"
                                
                                
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              /> -->



                              <textarea name="income_textArea" id="" cols="70" rows="3"value="{{$incomes->income_textArea}}"></textarea>
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
































