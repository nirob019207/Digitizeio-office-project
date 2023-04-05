@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        
    <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <center><br>
                                    <img class=" rounded-circle avatar-xl" style="height:150px;width:150px" src="{{url('upload/admin_images/'.$adminData->profile_image)}}"
                                     alt="Card image cap">

                                    </center>
                                   
                                    <div class="card-body">
                                        <h4 class="card-title">Name:{{$adminData->name}}</h4>
                                        <hr>
                                       
                                        <hr>
                                        <h4 class="card-title">User Email:{{$adminData->email}}</h4>
                                        <hr>
                                        <a href="{{route('edit.profile')}}" class=" btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                                       
                                    </div>
                                </div>
                            </div>
        
                                        </div>
        <!-- end row -->
    </div>
    
</div>
<!-- End Page-content -->





@endsection