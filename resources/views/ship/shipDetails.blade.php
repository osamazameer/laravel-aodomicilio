@extends('layouts.app')
@section('content')

<div class="container">
    <article class="card">
        <header class="card-header"> My Order </header>
        <div class="card-body">
            <h6>Order ID: {{$order->reference_no}}</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Name:</strong> <br>{{$order->name}} </div>
                    <div class="col"> <strong>Email:</strong> <br> {{$order->email}} </div>
                    <div class="col"> <strong>Phone:</strong> <br> <i class="fa fa-phone"></i> {{$order->phone}} </div>
                    <div class="col"> <strong>Payment Method:</strong> <br> {{$order->payment_method}} </div>
                </div>
                <div class="card-body row">
                    <div class="col"> <strong>Order Instructions:</strong> <br>{{$order->instructions}}</div>
                    <div class="col"> <strong>Shipping By:</strong> <br> {{$order->from_location}}</div>
                    <div class="col"> <strong>Shipping To:</strong> <br> {{$order->to_location}} </div>
                    <div class="col"> <strong>Tracking #:</strong> <br> {{$order->reference_no}} </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-spinner"></i> </span> <span class="text">Shipping Status</span> </div>
            </div>
            <hr>

            <hr> <a href="{{route('home')}}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back</a>
        </div>
    </article>
</div>
<style>
    .container {
        margin-top: 50px;
        margin-bottom: 50px
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.10rem
    }

    .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }

    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }

    .track .step.active:before {
        background: #FF5722
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }

    .track .step.active .icon {
        background: #ee5435;
        color: #fff
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000
    }

    .track .text {
        display: block;
        margin-top: 7px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px
    }




    .btn-warning {
        color: #ffffff;
        background-color: #ee5435;
        border-color: #ee5435;
        border-radius: 1px
    }

    .btn-warning:hover {
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px
    }
</style>
@endsection