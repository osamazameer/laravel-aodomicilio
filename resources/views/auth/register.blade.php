@extends('layouts.app')

@section('content')
    <div class="container my-5">
        
        <div class="card mx-auto" style="max-width: 550px;"> 
            <div class="card-body">
            <div class="card-title"><h5>Register</h5></div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input value="{{ old('name') }}" type="text" name="name" class="form-control @error('name') border border-danger @enderror" id="name" aria-describedby="emailHelp" placeholder="Please enter your full name">
                    @error('name')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input value="{{ old('email') }}" type="email" name="email" class="form-control @error('email') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email')
                        <small id="emailHelp" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control @error('password') border border-danger @enderror" id="exampleInputPassword1" placeholder="Password" name="password">
                    @error('password')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') border border-danger @enderror" id="exampleInputPassword1" placeholder="Password">
                    @error('password_confirmation')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>                        
            </div>
        
        </div>
    </div>
@endsection