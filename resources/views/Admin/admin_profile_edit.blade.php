@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Edit Profile Page</h4>

                                        <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">

                                        @csrf
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10 mb-3">
                                                <input name="name" class="form-control" type="text" value="{{ $editData->name}}" id="name">
                                            </div>
                                        </div>



                                        


                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                            <div class="col-sm-10 mb-3">
                                                <input class="form-control" type="email" name="email"value="{{ $editData->email}}" id="email">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                            <div class="col-sm-10 mb-3">
                                                <input class="form-control" type="file" name="profile_image" id="profile_image">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                           
                                            <div class="col-sm-10 mb-3">
                                            <img class=" rounded-circle avatar-xl"style="height:150;width:150px" src="{{url('upload/admin_images/'.$editData->profile_image)}}" id="showImage" alt="Card image cap">
                                            </div>
                                        </div>
                                        <input type="submit"name="Update_profile" class="btn btn-info waves-effect waves-light"value="Update profile ">



</form>
                                        
                                        <!-- end row -->
                                       
                                        <!-- end row -->
                                       
                                       
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
    
                                        
        <!-- end row -->
    </div>
    
</div>
<!-- End Page-content -->


<script type="text/javascript">
$(document).ready(function(){
    $('#profile_image').change(function(e){
        var reader=new FileReader();
        reader.onload=function(e){
        
            $('#showImage').attr('src', e.target.result);

        }
        reader.readAsDataURL(e.target.files['0']);

    });
});
</script>


@endsection