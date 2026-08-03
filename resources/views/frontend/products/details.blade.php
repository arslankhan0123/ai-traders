@extends('layouts.frontend.main')
@section('title', $product->name)

@section('content')
<section class="rts-section-gap">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                @if($product->feature_image)
                    <img src="{{ Storage::url($product->feature_image) }}" alt="{{ $product->name }}"
                        class="w-100 rounded-4" style="max-height: 560px; object-fit: cover;">
                @endif

                @if($product->galleries->isNotEmpty())
                    <div class="row g-3 mt-2">
                        @foreach($product->galleries as $gallery)
                            <div class="col-4">
                                <img src="{{ Storage::url($gallery->image) }}" alt="{{ $product->name }}"
                                    class="w-100 rounded-3" style="height: 130px; object-fit: cover;">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-lg-6">
                <span class="sub-title">{{ $product->category?->name }}</span>
                <h1 class="heading-title-two mt-2">{{ $product->name }}</h1>
                @if($product->sku)<p class="text-muted mb-3">SKU: {{ $product->sku }}</p>@endif
                @if($product->short_description)<p class="desc">{{ $product->short_description }}</p>@endif
                <h3 class="mt-4">{{ number_format($product->sale_price, 2) }}</h3>
                <p class="mb-4">Availability: {{ $product->stock_quantity > 0 ? 'In Stock' : 'Out of Stock' }}</p>
                <a href="{{ route('contact') }}" class="rts-btn btn-primary">Request Information <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        @if($product->long_description)
            <div class="mt-5 pt-4 border-top product-description">{!! $product->long_description !!}</div>
        @endif
    </div>
</section>
@endsection
