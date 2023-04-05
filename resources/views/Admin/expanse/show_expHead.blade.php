

@extends('Admin.Admin_master')
@section('admin')



<div class="py-12">
    <div class="container">
      
    <div class=' d-flex justify-content-between '>
                        <div class="flex">
                        <a  href="{{route('expanse.view')}}" class="btn btn-info" > Back</a>
                     
                        </div>
                        <div>
                        <a  class="btn btn-success" href="{{route('exp.head')}}">Create Expanse Head</a>
                        </div>
                        </div>
    <div class="card mt-4">
   



                


                <div class='card-header'>
                            All Expanse Head
                        </div>
                    <div class="card-body">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Expanse Code</th>
      <th scope="col">Expanse Head</th>
      <th scope="col">Created_At</th>
      
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($expanses as $expanse)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$expanse->exp_head}}</td>
        <td>{{Carbon\Carbon::parse($expanse->created_at)->diffForHumans()}}</td>
       
      </tr>
    @endforeach
  </tbody>
</table>

</div>
        </div>
    </div>

@endsection


