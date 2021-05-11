@extends('layouts.admin')

@section('admincontent')
<div class="container">
    @if($orders->count())
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Name</th>
                <th scope="col">Contact Info</th>
                <th scope="col">From Location</th>
                <th scope="col">To Location</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Instructions</th>
                <th scope="col">Reference#</th>
                {{-- <th scope="col">Imag</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{$order->status}}</th>
                <td>{{$order->name}}</td>
                <td>
                    @if($order->email)
                    <p>
                        {{$order->email}}
                    </p>
                    @endif
                    @if($order->phone)
                    <p>
                        {{$order->phone}}
                    </p>
                    @endif
                </td>
                <td>{{$order->from_location}}</td>
                <td>{{$order->to_location}}</td>
                <td>{{$order->payment_method}}</td>
                <td>{{$order->instructions}}</td>
                <td>{{$order->reference_no}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="text-center">
        <h5>There are no orders!</h5>
    </div>
    @endif
</div>
@endsection