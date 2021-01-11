@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("It's time to buy ") . $product->name . '!'}}</div>

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
                            <tr>
                                <td><b>{{ $product->name }}</b></td>
                                <td>{{ $product->getSize() }}</td>
                                <td>{{ $product->getPrice() }}</td>
                                <td>{{ $product->getWeight() }}</td>
                            </tr>
                        </table>
                        <br>
                        <div>
                            <h5>Delivery</h5>
                            <form>
                                @csrf
                                @foreach($product->deliveries as $delivery)

                                    <input
                                        type="radio"
                                        id="{{ $delivery->id }}"
                                        name="delivery"
                                        value="{{ $delivery }}"
                                    >
                                        {{ $delivery->name }} {{ $delivery->getPrice() }}
                                    </input>

                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                    Edit Product
                </a>
                <form method="post" action="{{ route('products.destroy', $product) }}"
                      style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

