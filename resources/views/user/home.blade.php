@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('content')
<!-- Start Container Fluid -->
<div class="container-fluid pt-3" style="    background: #eee;">
    <div class="row">

        <div class="col-xl-12 col-lg-12 jusitfy-content-center">
            <div class="row">
                @forelse($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $product->foto) }}" alt="{{$product->nama }}"
                                title="{{$product->nama }}" class="img-fluid rounded-top"
                                style="width:100%;height:300px;object-fit:cover;">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">

                                <div>
                                    <a href="{{ route('products.show', $product) }}"
                                        class="text-dark fw-medium fs-16">{{$product->nama }}</a>
                                    @if($product->terjual > 0)
                                    <p class="text-muted mb-0">{{number_format($product->terjual)}} Terjual</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div
                            class="card-footer bg-light-subtle d-flex justify-content-between align-items-center border-top">
                            <p class="fw-medium text-dark fs-16 mb-0">Rp
                                {{ number_format($product->harga, 0, ',', '.')}} </p>
                            <div>
                                <a href="{{ route('products.show', $product) }}" class="link-primary fw-medium">Lihat
                                    Produk<i class='ri-arrow-right-line align-middle'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-3 col-md-6">
                    <p class="text-center">Belum ada produk tersedia.</p>
                </div>
                @endforelse
            </div>

            <div class="p-3 border-top">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
<!-- End Container Fluid -->
@endsection