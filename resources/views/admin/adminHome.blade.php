@extends('layout.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin user.
                </div>
                Process the orders
                <a href="{{url('orders')}}">orders</a>
                <a href="{{url('profile')}}">studio</a>
            </div>
        </div>
    </div>
</div>
@endsection