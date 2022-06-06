@extends('backend.layouts.app')
@section('title')
Admin|Dashboard
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="now-ui-icons ui-2_chat-round"></i>
                                    </div>
                                    <h3 class="info-title">859</h3>
                                    <h6 class="stats-title">Messages</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="now-ui-icons business_money-coins"></i>
                                    </div>
                                    <h3 class="info-title"><small>$</small>3,521</h3>
                                    <h6 class="stats-title">Today Revenue</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">{{ $customer_count }}</h3>
                                    <h6 class="stats-title">Customers</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="now-ui-icons objects_support-17"></i>
                                    </div>
                                    <h3 class="info-title">353</h3>
                                    <h6 class="stats-title">Support Requests</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Best Selling Products</h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-shopping text-center">
                            <thead class="">
                                <th>Thumbnail</th>
                                <th>Product</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Amount</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="{{ asset('backend/img/saint-laurent.jpg') }}">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#jacket">Suede Biker Jacket</a>
                                        <br /><small>by Saint Laurent</small>
                                    </td>
                                    <td>Black</td>
                                    <td>M</td>
                                    <td>
                                        <small>€</small>3,390
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <small>€</small>549
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
