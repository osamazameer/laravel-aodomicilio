@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="{{ $product->image_url }}">
                        <img class="pic-2" src="{{ $product->image_url }}">
                    </a>
                    <ul class="social">
                        <li><a href="view/{{$product->id}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">

                    <h3 class="title"><a href="#">{{$product->title}}</a></h3>
                    <div class="price">${{$product->price}}</div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>


<style>
    .demo {
        padding: 45px 0
    }

    .product-grid2 {
        font-family: 'Open Sans', sans-serif;
        position: relative
    }

    .product-grid2 .product-image2 {
        overflow: hidden;
        position: relative
    }

    .product-grid2 .product-image2 a {
        display: block
    }

    .product-grid2 .product-image2 img {
        width: 100%;
        height: auto
    }

    .product-image2 .pic-1 {
        opacity: 1;
        transition: all .5s
    }

    .product-grid2:hover .product-image2 .pic-1 {
        opacity: 0
    }

    .product-image2 .pic-2 {
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: all .5s
    }

    .product-grid2:hover .product-image2 .pic-2 {
        opacity: 1
    }

    .product-grid2 .social {
        padding: 0;
        margin: 0;
        position: absolute;
        bottom: 50px;
        right: 25px;
        z-index: 1
    }

    .product-grid2 .social li {
        margin: 0 0 10px;
        display: block;
        transform: translateX(100px);
        transition: all .5s
    }

    .product-grid2:hover .social li {
        transform: translateX(0)
    }

    .product-grid2:hover .social li:nth-child(2) {
        transition-delay: .15s
    }

    .product-grid2:hover .social li:nth-child(3) {
        transition-delay: .25s
    }

    .product-grid2 .social li a {
        color: #505050;
        background-color: #fff;
        font-size: 17px;
        line-height: 45px;
        text-align: center;
        height: 45px;
        width: 45px;
        border-radius: 50%;
        display: block;
        transition: all .3s ease 0s
    }

    .product-grid2 .social li a:hover {
        color: #fff;
        background-color: #3498db;
        box-shadow: 0 0 10px rgba(0, 0, 0, .5)
    }

    .product-grid2 .social li a:after,
    .product-grid2 .social li a:before {
        content: attr(data-tip);
        color: #fff;
        background-color: #000;
        font-size: 12px;
        line-height: 22px;
        border-radius: 3px;
        padding: 0 5px;
        white-space: nowrap;
        opacity: 0;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: -30px
    }

    .product-grid2 .social li a:after {
        content: '';
        height: 15px;
        width: 15px;
        border-radius: 0;
        transform: translateX(-50%) rotate(45deg);
        top: -22px;
        z-index: -1
    }

    .product-grid2 .social li a:hover:after,
    .product-grid2 .social li a:hover:before {
        opacity: 1
    }

    .product-grid2 .add-to-cart {
        color: #fff;
        background-color: #404040;
        font-size: 15px;
        text-align: center;
        width: 100%;
        padding: 10px 0;
        display: block;
        position: absolute;
        left: 0;
        bottom: -100%;
        transition: all .3s
    }

    .product-grid2 .add-to-cart:hover {
        background-color: #3498db;
        text-decoration: none
    }

    .product-grid2:hover .add-to-cart {
        bottom: 0
    }

    .product-grid2 .product-new-label {
        background-color: #3498db;
        color: #fff;
        font-size: 17px;
        padding: 5px 10px;
        position: absolute;
        right: 0;
        top: 0;
        transition: all .3s
    }

    .product-grid2:hover .product-new-label {
        opacity: 0
    }

    .product-discount-label,
    .product-new-label {
        background-color: #e67e22;
        color: #fff;
        font-size: 17px;
        padding: 2px 10px;
        position: absolute;
        right: 10px;
        top: 10px;
        transition: all .3s
    }

    .product-content {
        z-index: -1;
        padding: 15px;
        text-align: center
    }

    .title {
        font-size: 14px;
        text-transform: capitalize;
        margin: 0 0 7px;
        transition: all .3s ease 0s
    }

    .title a {
        color: #414141
    }

    .price {
        color: #000;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: 600;
        margin-right: 2px;
        display: inline-block
    }

    .price span {
        color: #909090;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0;
        text-decoration: line-through;
        text-align: left;
        display: inline-block;
        margin-top: -2px
    }

    .rating {
        padding: 0;
        margin: -22px 0 0;
        list-style: none;
        text-align: right;
        display: block
    }

    .rating li {
        color: #ffd200;
        font-size: 13px;
        display: inline-block
    }

    .rating li.disable {
        color: #dcdcdc
    }

    @media screen and (max-width:990px) {
        .product-grid2 {
            margin-bottom: 30px
        }
    }
</style>
@endsection