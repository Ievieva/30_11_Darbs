@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Shop ahead!') }}</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Size</th>
                                <th scope="col">Price</th>
                                <th scope="col">Weight</th>
                            </tr>
                            </thead>
                            @forelse($products as $product)
                                <tr>
                                    <td>
                                        <a href="{{ route('products.show', ['product' => $product]) }}">
                                            {{ $product->name }}
                                        </a>
                                    </td>
                                    <td>{{$product->getSize()}}</td>
                                    <td>{{$product->getPrice()}}</td>
                                    <td>{{$product->getWeight()}}</td>

                                </tr>
                            @empty
                                <h3>Nothing to buy</h3>

                            @endforelse
                        </table>
                    </div>
                </div>
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                    Create a new product
                </a>
            </div>
        </div>
    </div>
@endsection
