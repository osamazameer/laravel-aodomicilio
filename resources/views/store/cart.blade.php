@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <p class="text-center">Add More on Cart <a href="/store"> Click here</a> for more products</p>
    <hr>



    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col" width="120">Quantity</th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)

                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap"><img src="{{$products->image_url}}" class="img-thumbnail img-sm"></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">{{$products->title}} </h6>
                                <dl class="param param-inline small">

                                    <dd class="mr-2">Fast {{$products->category->title}}</dd>
                                </dl>
                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <select value="{{$products->qty}}" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </td>
                    <td>
                        <div class="price-wrap">
                            <var class="price">{{$products->price}}</var>
                            <small class="text-muted">({{$products->price}} each)</small>
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right">
                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

<style>
    .param {
        margin-bottom: 7px;
        line-height: 1.4;
    }

    .param-inline dt {
        display: inline-block;
    }

    .param dt {
        margin: 0;
        margin-right: 7px;
        font-weight: 600;
    }

    .param-inline dd {
        vertical-align: baseline;
        display: inline-block;
    }

    .param dd {
        margin: 0;
        vertical-align: baseline;
    }

    .shopping-cart-wrap .price {
        color: #007bff;
        font-size: 18px;
        font-weight: bold;
        margin-right: 5px;
        display: block;
    }

    var {
        font-style: normal;
    }

    .media img {
        margin-right: 1rem;
    }

    .img-sm {
        width: 90px;
        max-height: 75px;
        object-fit: cover;
    }
</style>
@endsection