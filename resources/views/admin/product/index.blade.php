@extends('layouts.admin')

@section('admincontent')
<div class="container">
    @if($products->count())
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                {{-- <th scope="col">Imag</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->title}}</td>
                <td>€{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category->title}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="text-center">
        <h5>There are no products available!</h5>
    </div>
    @endif
</div>
@endsection