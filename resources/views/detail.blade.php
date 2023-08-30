@extends('navbar')

@section('title','Detail')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 6%; margin-bottom:6%">
        <div class="card detail d-flex flex-row align-items-center" style="width: 50%;">
            <img src="/{{ $items->image }}" alt="" style="width: 200px;">
            <form method="POST" action="/item">
                @csrf
                <div class="card-body">
                    <h4 class="card-text">{{ $items->name }}</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Price: Rp. {{ $items->price }},-</td>
                            </tr>
                            <tr>
                                <td>{{ $items->desc }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <input type="hidden" name="itemID" value="{{ $items->id }}">
                        <input type="hidden" name="price" value="{{ $items->price }}">
                        <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                        <button type="submit" class="btn" style="background-color: #C8DF52; padding-left: 5%; padding-right: 5%;">Buy</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection