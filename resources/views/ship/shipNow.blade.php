@extends('layouts.app')
{{-- SHIFT: Order/Ship now--}}
@section('content')

<div class="card-order">
    <h1 class="order-text">Let&apos;s Start Ordering</h1>
    <div class="container">
        <div class="col-md-6 m-auto">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs heads -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab" class="nav-link">Track Now</a>
                    </li>
                    <li role="presentation" class="nav-item"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" class="nav-link">Ship Now</a>
                    </li>
                    <li role="presentation" class="nav-item"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" class="nav-link">Shipping Status</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content tabs">
                    @if(session('error'))
                    <span class="text-danger"> {{session('error')}} </span>
                    @endif

                    @if(session('status'))
                    <span class="text-success"> {{session('status')}} </span>
                    @endif

                    @if(session('ref_no'))
                    <span class="text-success bold">Refrence No: {{session('ref_no')}} </span>
                    @endif

                    <div role="tabpanel" class="tab-pane active" id="Section1">
                        @include('ship.track')

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form action="{{ route('ship-now') }}" method="post" class="form-tabs">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input value="{{ old('name') }}" type="text" name="name" class="form-control @error('name') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable name for category">
                                @error('name')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ old('email') }}" type="email" name="email" class="form-control @error('email') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable email for category">
                                @error('email')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact No.</label>
                                <input value="{{ old('phone_no') }}" type="text" name="phone_no" class="form-control @error('phone_no') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable phone_no for category">
                                @error('phone_no')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">To</label>
                                <input value="{{ old('to_location') }}" type="text" name="to_location" class="form-control @error('to_location') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g. Libson, Porto">
                                <small class="form-text text-muted">Where you would like to ship</small>
                                @error('to_location')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">From</label>
                                <input value="{{ old('from_location') }}" type="text" name="from_location" class="form-control @error('from_location') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g. Libson, Porto">
                                <small class="form-text text-muted">Where are you shipping from</small>

                                @error('from_location')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Payment Method</label>
                                <input value="{{ old('payment_method') }}" type="text" name="payment_method" class="form-control @error('payment_method') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable payment_method for category">
                                @error('payment_method')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="instructions">Instructions</label>
                                <textarea id="instructions" value="{{ old('instructions') }}" name="instructions" class="form-control @error('instructions') border border-danger @enderror" rows="3" placeholder="What is the Category about?"></textarea>
                                @error('instructions')
                                <small id="" class="form-text text-danger ">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active" >Make  Active</label>
                </div> --}}
                            <button type="submit" class="btn btn-danger button-submit">SUBMIT</button>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <form class="form-tabs">
                            <div class="form-group">
                                <label>Order 3</label>
                                <input type="text" class="form-control" placeholder="Enter Your Order Here">
                            </div>
                            <div class="form-group">
                                <label>Order Address 3</label>
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <button class="btn btn-danger button-submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<style>
    .tab .nav-tabs {
        border: none;
        border-bottom: 2px solid #ea0000;
        margin: 0;
    }

    .tab {
        border-bottom: 2px solid #ea0000;
        margin: auto;
    }

    .form-tabs {
        width: 80%;
        margin: 5% auto;
    }

    .button-submit {
        text-align: center;
        margin: auto;
        display: block;
        width: 100%;
    }

    .order-text {
        text-align: center;
        font-weight: bold;
        color: gray;
        font-variant-caps: all-petite-caps;
        font-size: 48px;
        margin: 70px 0px 30px 0px;
    }

    .tab .nav-tabs li a {
        padding: 10px 20px;
        margin: 0 10px -1px 0;
        font-size: 17px;
        font-weight: 600;
        color: #293241;
        text-transform: uppercase;
        border: 2px solid #e6e5e1;
        border-bottom: none;
        border-radius: 5px 5px 0 0;
        z-index: 1;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .nav-tabs a:hover {
        background: #fff;
        color: #ea0000;
        border: 2px solid #ea0000;
        border-bottom: none !important;
    }

    .nav-tabs .active {
        background: #fff !important;
        color: #ea0000 !important;
        border-bottom: none !important;
        border-top: 2px solid #ea0000 !important;
        border-left: 2px solid #ea0000 !important;
        border-right: 2px solid #ea0000 !important;
        border-bottom: 2px solid transparent;

    }


    .tab .nav-tabs .nav-link:before {
        content: "";
        display: block;
        height: 2px;
        background: #fff;
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out 0s;
    }

    .tab .nav-tabs .nav-link:hover:before {
        transform: scaleX(1);
    }

    .tab .tab-content {
        padding: 10px;
        font-size: 17px;
        color: #6f6f6f;
        line-height: 30px;
        letter-spacing: 1px;
        position: relative;
    }

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    @media only screen and (max-width: 479px) {
        .tab .nav-tabs {
            border: none;
        }

        .tab .nav-tabs li {
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }

        .tab .nav-tabs li a {
            margin: 0;
            border-bottom: 2px solid transparent;
        }

        .tab .nav-tabs li a:before {
            content: "";
            width: 100%;
            height: 2px;
            background: #ea0000;
            position: absolute;
            bottom: -2px;
            left: 0;
        }
    }
</style>
@endsection