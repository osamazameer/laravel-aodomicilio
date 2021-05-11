@extends('layouts.app')

@section('content')
<div class="container my-5">

    <div class="card mx-auto" style="max-width: 550px;">
        <div class="card-body">
            <div class="card-title">
                <h5>Login</h5>
            </div>

            <p class="text-center text-danger">
                @if(session('status'))
                {{session('status')}}
                @endif
            </p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
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
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </form>
        </div>

    </div>
</div>
@endsection