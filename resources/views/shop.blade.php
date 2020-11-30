@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Shop ahead!') }}</div>

                    <div class="card-body">

                        @forelse($jeans as $item)

                            <div>{{$item->name}}</div>
                            <div>{{$item->size}}</div>
                            <div>{{$item->price}}</div>

                        @empty
                            <h3>Nothing to buy</h3>

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
