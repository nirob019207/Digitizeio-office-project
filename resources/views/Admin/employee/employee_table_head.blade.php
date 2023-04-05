@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
  <div class="container">
    <div class='d-flex justify-content-between'>
      <div>
      </div>
      <div>
        <a href="{{route('employee.show')}}" class="btn btn-info"> Back</a>
      </div>
    </div>

    <form action="{{route('store.empHead')}}" method="POST">
      @csrf
      <div class="col-xxl">
        <div class="card mb-4 mt-4" style="background-color:#c6e2ff">
          <div class="card-body">
            <div class="text-center my-4 ">
              <h2>Duty Table</h2>
            </div>
            <form>
            <div class="row mb-3">
    <label class="col-sm-3 col-form-label" style="color:black">Employee Name</label>
    <div class="col-sm-9">
        <div class="input-group input-group-merge">
            <select class="form-control" name="emp_name">
                <option value="">Select Employee</option>
                @foreach ($employee_name as $employees)
                <option value="{{ $employees->Name }}">{{ $employees->Name }}</option>

                @endforeach
            </select>
        </div>
    </div>
</div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color:black"> Place</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control" name="emp_place" />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color:black">Joining Date</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control" name="emp_join" id="datepicker" />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color:black">Expanse Amount</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <input type="text" class="form-control" name="emp_amount" />
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
    </form>
  </div>
</div>

@endsection

<script>
  $(document).ready(function() {
    $('#datepicker').datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth:true,
      changeYear:true
    });
  });
</script>
<style>
  .card {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

</style>
