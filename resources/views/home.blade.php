@extends('navbar')

@section('title','Home')

@section('content')
    <div class="container justify-content-center mt-2">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container product">
        <div class="mt-3">
            <div class="row productCollection">
                <?php foreach ($items as $item) : ?>
                    <div class="col d-flex justify-content-center">
                        <div class="card productList mb-3" style="max-width: 220px;">
                            <img src="{{ $item->image }}" alt="">
                            <div class="card-body align-item-center">
                                <p class="card-text">{{ $item->name }}</p>
                                <a href="/item/{{ $item->id }}" class="text-body">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="container">
        {{ $items->links('pagination::bootstrap-5') }}
    </div>
@endsection