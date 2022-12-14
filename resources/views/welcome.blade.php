@extends('layouts.app')

@section('content')
    @if (empty($products))
        <div class="alert alert-warning">
            The list of products is empty
        </div>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3">
                    @include('components.products-card')
                </div>
            @endforeach
        </div>
    @endif
@endsection
