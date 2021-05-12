@extends('layouts.app')

@section('content')
<script>
    function plus() {
        var value = parseInt(document.getElementById('qtyinput').value);
        value = isNaN(value) ? 0 : value;
        value = value + 1;
        document.getElementById('qtyinput').value = value;
    }

    function minus() {
        var value = parseInt(document.getElementById('qtyinput').value);
        value = isNaN(value) ? 0 : value;
        if (value != 0) {
            value--;
        }

        document.getElementById('qtyinput').value = value;
    }
</script>
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content m-auto text-center">
                        <div class="tab-pane active" id="pic-1"><img class="w-75" src="{{ $product->image_url }}" /></div>
                        <div class="tab-pane" id="pic-2"><img class="w-75" src="{{ $product->image_url }}" /></div>
                        <div class="tab-pane" id="pic-3"><img class="w-75" src="{{ $product->image_url }}" /></div>
                        <div class="tab-pane" id="pic-4"><img class="w-75" src="{{ $product->image_url }}" /></div>
                        <div class="tab-pane" id="pic-5"><img class="w-75" src="{{ $product->image_url }}" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ $product->image_url }}" /></a></li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ $product->image_url }}" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ $product->image_url }}" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ $product->image_url }}" /></a></li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img src="{{ $product->image_url }}" /></a></li>
                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{$product->title}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <p class="product-description">{{$product->description}}</p>
                    <h4 class="price">current price: <span>${{$product->price}}</span></h4>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

                    <h5 class="colors">Quantity
                        <div class="qty mt-3">
                            <span onclick="minus()" id="minusbtn" class="minus bg-dark">-</span>
                            <input type="number" class="count" id="qtyinput" name="qty" value="1">
                            <span onclick="plus()" id="plusbtn" class="plus bg-dark">+</span>
                        </div>
                    </h5>
                    <div class="action text-center  ">
                        <a href="{{route('cart')}}"><button class="add-to-cart btn btn-default" style="width:40%;" type="button">add to cart</button></a>
                        <a href="{{route('store')}}"><button style="width:40%;" class="like btn btn-default" type="button">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    body {
        font-family: 'open sans';
        overflow-x: hidden;
    }

    img {
        max-width: 100%;
    }


    .qty .count {
        color: #000;
        display: inline-block;
        vertical-align: top;
        font-size: 25px;
        font-weight: 700;
        line-height: 30px;
        padding: 0 2px;
        min-width: 35px;
        text-align: center;
    }

    .qty .plus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial, sans-serif;
        text-align: center;
        border-radius: 50%;
    }

    .qty .minus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial, sans-serif;
        text-align: center;
        border-radius: 50%;
        background-clip: padding-box;
    }



    .minus:hover {
        background-color: #717fe0 !important;
    }

    .plus:hover {
        background-color: #717fe0 !important;
    }

    /*Prevent text selection*/
    span {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    input {
        border: 0;
        width: 2%;
    }

    nput::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input:disabled {
        background-color: white;
    }


    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #9e0000;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #9e0000;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #9e0000;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }



    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }
</style>
@endsection