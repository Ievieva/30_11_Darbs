@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Create a new product!') }}</div>
                    <div class="card-body">

                        <form method="post" action="{{ route('products.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name" name="name"
                                    placeholder="Your product"
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
                                    required>
                                <label for="weight">Weight g</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="weight"
                                    name="weight"
                                    min="1"
                                    max="99999999"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
