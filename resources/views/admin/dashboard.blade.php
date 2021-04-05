@extends('navbar.adminnav')
@section('content')
<div class="container mt-3">
    <h2>Dashboard</h2>
    <h3 class="h4 mt-4"> Monitoring</h3>

    <div class="card rounded shadow p-3 " style="border-top: 15px solid #3A5488">
        <div class="card-body">
            <div class="row">
                <div class="col"><h4>Transaction Today</h4></div>
                <div class="col"><h1>tes</h1></div>
            </div>

        </div>
    </div>


    <div class="card rounded shadow p-3 mt-5" style="border-top: 15px solid #3A5488">
        <div class="card-body">
            <div class="row">
                <div class="col"><h4>Revenue</h4></div>
                <div class="col"><h1>tes</h1></div>
            </div>

        </div>


</div>

    <div class="row mt-5">
        <div class="col-md">
            <div class="card w-100 p-3 d-flex shadow" style="border-left: 10px solid #3A5488">
                <div class="row">
                    <div class="col"><h4>Purchased Today</h4></div>
                    <div class="col"><h1>tes</h1></div>
                </div>

            </div>
        </div>
        <div class="col-md">
            <div class="card w-100 p-3 d-flex shadow" style="border-left: 10px solid #3A5488">
                <div class="row">
                    <div class="col"><h4>Order Canceled</h4></div>
                    <div class="col"><h1>tes</h1></div>
                </div>

            </div>
        </div>


    </div>
    <div class="d-flex justify-content-between mt-4">
        <h3 class="h4 "> Transaction List</h3>

        <div class="d-flex">
            <input type="text" width="400px" class="form-control">
            <button type="button" class="btn btn-secondary"> Search </button>

        </div>
    </div>


    <div class="card p-5 mt-3">
        <div class="card-body p-3">
            <table class="table w-100 shadow">
                <tr class="p-3">
                    <th scope="col">Purchase ID</th>
                    <th>Total Items</th>
                    <th>Total Price</th>
                    <th>Recipt Number</th>
                    <th>Cashier ID</th>
                    <th>Status</th>
                </tr>
                <tr class="" style="margin-top: 200px">
                    <td>Purchase ID</td>
                    <td>Total Items</td>
                    <td>Total Price</td>
                    <td>Recipt Number</td>
                    <td>Cashier ID</td>
                    <td>Status</td>
                </tr>

            </table>
        </div>
    </div>
@endsection
