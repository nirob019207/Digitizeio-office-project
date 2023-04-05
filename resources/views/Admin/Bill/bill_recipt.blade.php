@extends('Admin.Admin_master')
@section('admin')

<div class='container'>
  <div class="card" style="color:black;">
    <h1 class="text-center">Bill</h1>
    <div class="card-body ml-2 mt-4 mb-4">
      <p>Date: 17-March-2023</p>
      <p>Invoice No: 710040</p>
      <p>Item # Information Technology Service Consultancy and Maintenance for Sonali Life Insurance Company Limited for Month of February, 2023</p>
      <p>Description Unit Price Quantity Price in BDT</p>
      <p>Information Technology Serve</p>
      <table class="table mt-4">
        <thead>
          <tr style="background-color:darkgrey;">
            <th scope="col">Sl No</th>
            <th scope="col">Description</th>
            <th scope="col">Unit Price </th>
            <th scope="col">Quantity</th>
            <th scope="col">Price in BDT</th>
          </tr>
        </thead>
        <tbody>
          @php($i=1)
          @foreach($bills as $bill)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$bill->description}}</td>
              <td>{{$bill->unit_price}}</td>
              <td>{{$bill->quantity}}</td>
              <td>{{$bill->price_in_bdt}}</td>
            </tr>
          @endforeach
          <tr>
            <td colspan="4"></td>
            <td>{{$bill->price_in_bdt}}</td>
          </tr>
        </tbody>
      </table>
      <div class="mt-4">
        <p>
          Online Payment Details: <br>
          Bank A/C: 1223602086001 <br>
          Branch Name: MOUCHAK BRANCH, THE CITY BANK LTD <br>
          Routing Number: 225274361 <br>
          Sincerely Yours, <br><br><br><br>
          Rashedul Hasan <br>
          Chief Consultant, DIGITIZEIO <br>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Add a print button -->
<button id="print-btn" class="btn btn-primary">Print</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-HOaVT7kPJjoukt5z9nO9aMafHiscRzB0bEjqRM2mO+gR6AiJX6q5x6U7IfJXcvr+" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    // Add a click event listener to the print button
    $("#print-btn").on("click", function() {
      // Print the content of the container div
      window.print();
    });
  });
</script>

@endsection
