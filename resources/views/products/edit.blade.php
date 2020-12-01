@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Edit the product.') }}</div>
                    <div class="card-body">

                        <form method="post" action="{{ route('products.update', $product) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Product</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name" name="name"
                                    value={{ $product->name }}
                                        required>

                                <label for="size">Size</label>
                                <select type="text" class="form-control" id="size" name="size">
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>

                                <label for="price">Price in cents</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                    min="1"
                                    max="99999999999"
                                    value={{ $product->price }}
                                        required>

                                <label for="weight">Weight g</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="weight"
                                    name="weight"
                                    min="1"
                                    max="9999999"
                                    value={{ $product->weight }}
                                        required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

