@extends('layouts.admin')

@section('admincontent')
<div class="container my-5">

    <div class="card mx-auto" style="max-width: 550px;">
        <div class="card-body">
            <div class="card-title">
                <h5>New Product</h5>
            </div>
            <p class="text-center">

                @if(session('error'))
                <span class="text-danger"> {{session('error')}} </span>
                @endif

                @if(session('status'))
                <span class="text-success"> {{session('status')}} </span>
                @endif
            </p>
            <form action="{{ route('create-product') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input required value="{{ old('title') }}" type="text" name="title" class="form-control @error('title') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable title for category">
                    @error('title')
                    <small id="" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input required value="{{ old('price') }}" type="number" step="0.01" name="price" class="form-control @error('price') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a suitable price for category">
                    @error('price')
                    <small id="" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea required id="product-description" value="{{ old('description') }}" name="description" class="form-control @error('description') border border-danger @enderror" rows="3" placeholder="What is the product about?"></textarea>
                    @error('description')
                    <small id="" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="custom-select" name="category_id">
                        <option disabled selected>Open this select menu</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <small id="" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active">Make Active</label>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection