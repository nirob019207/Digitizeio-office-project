
@extends('Admin.Admin_master')
@section('admin')

<div class="py-12">
    <div class="container">

    <div class="row">
    <div class='col-md-4 ml-auto mb-4'>
                <div class='card text-' style="background-color:#ffffff;color:black;">
                    <div class='p-2 m-2'>
                        <form action="{{ route('expense.income') }}" method="GET">
                            <label for="">Previous month:</label>
                            <select name="month" id="month" class='p-2'>
                                @for($month = 1; $month <= 12; $month++)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endfor
                            </select>
                            <button type="submit" class="btn btn-info ml-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>
        <div class="row">
            
            <div class="col-md-6">
                <div class='card text-center' style="background-color:#e74c3c;color:white;">
                    <div class='p-2 m-2'>
                        @if(isset($totalExpenses))
                            <h5 class="card-title">Total Expenses</h5>
                            <p>Total expenses for the past month: $ {{ $totalExpenses[0]->TOTAL_EXP }}</p>
                        @else
                            <h5 class="card-title">No Expenses Found</h5>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='card text-center' style="background-color:#2ecc71;color:white;">
                    <div class='p-2 m-2'>
                        @if(isset($totalIncomes))
                            <h5 class="card-title">Total Income</h5>
                            <p>Total income for the past month:$ {{ $totalIncomes[0]->TOTAL_Inc }}</p>
                        @else
                            <h5 class="card-title">No Income Found</h5>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class='col-md-12 mt-4'>
                <div class="card text-center" style="background-color:#3498db;color:white;">
                    <div class="card-body">
                    @if(isset($totalIncomeExpense))
                            <h5 class="card-title">Total Profit</h5>
                            <p>Total profit privious month:$ {{ $totalIncomeExpense }}</p>
                        @else
                            <h5 class="card-title">No Income Found</h5>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection