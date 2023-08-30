@extends('navbar')

@section('title','Cart')

@php
    $count = 0;
@endphp

@section('content')
    <div class="container" style="margin-top: 1%; margin-bottom: 1%;">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row justify-content-center">
            <?php foreach ($orders as $order) : ?> 
                @if(auth()->user()->id === $order->user_id)
                    <?php foreach ($items as $item) : ?>
                        <?php if ($order->item_id == $item->id) : ?>
                            <div class="card d-flex flex-row align-items-center mt-2" style="width: 55%;">
                                <img src="/{{ $item->image  }}" alt="" style="width: 25%;">
                                <div class="card-body">
                                    <h4 class="card-text"> {{ $item->name  }}</h4>
                                    <p class="card-text m-0">Rp. {{ $order->price }},-</p>
                                </div>
                                <form method="POST" action="/deleteItem">
                                    @csrf
                                    <input type="hidden" name="orderID" value="{{ $order->id }}">
                                    <button type="submit" class="btn btn-outline-danger">Delete</i></button>
                                </form>
                            </div>
                            <?php $count++ ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                @endif
            <?php endforeach; ?>
        </div>
    </div>

    @if($count > 0)
        <div class="d-flex justify-content-center p-3">
            <form action="/checkout" method="POST">
                @csrf
                <div class="align-item-center" style="margin-top: 100%;">
                    <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                    <button type="submit" class="btn btn-outline-success">Check Out</button>
                </div>
            </form>
        </div>
    @else
        <div  class="container d-flex justify-content-center" style="margin-top: 16%; margin-bottom: 15%;">
            <h3>No item in Cart</h3>
        </div>
    @endif
@endsection