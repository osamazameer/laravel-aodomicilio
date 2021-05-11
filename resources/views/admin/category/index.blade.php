@extends('layouts.admin')

@section('admincontent')
<div class="container">
    @if($categories->count())
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Products</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->products->count()}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="text-center">
        <h5>There are no Categories available!</h5>
    </div>
    @endif
</div>
@endsection