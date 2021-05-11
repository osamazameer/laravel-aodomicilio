@extends('layouts.app')
{{-- SHIFT: Enter Ref No--}}
@section('content')
      <div class="container my-5">
        
        <div class="card mx-auto" style="max-width: 550px;"> 
            <div class="card-body">
            <div class="card-title"><h5>Ship Now</h5></div>

            <p class="text-center">
            
            @if(session('error'))
                <span class="text-danger"> {{session('error')}} </span>
            @endif

            @if(session('status'))
                <span class="text-success"> {{session('status')}} </span>
            @endif

            @if(session('ref_no'))
                <span class="text-success bold">Refrence No: {{session('ref_no')}} </span>
            @endif
            </p>
        <form action="{{ route('track') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="ref_no">Please Enter Your Refrence No.</label>
                    <input required value="{{ old('ref_no') }}" type="text" name="ref_no" class="form-control @error('ref_no') border border-danger @enderror" id="ref_no" aria-describedby="emailHelp" placeholder="Enter a suitable ref_no for category">
                    @error('ref_no')
                        <small id="" class="form-text text-danger ">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Track</button>
            </form> 
               </div>
        
        </div>
    </div>
@endsection