@extends('layouts.app')
@section('title', 'Pesanan UMKM')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- Breadcrumb dinamis --}}
    <x-breadcrumb :items="[
        'Pesanan UMKM' => ''
        ]" />
    <!-- Responsive Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <h5 class="mb-0">Produk UMKM</h5>
                
            </div>
            <!-- Search Form -->
            <form action="{{ route('pesanan.index') }}" method="GET" class="d-flex" style="width: 300px;">
                <input type="text" name="search" class="form-control form-control me-2" placeholder="Cari..."
                    value="{{ request('search') }}">
                <button class="btn btn-primary btn-sm" type="submit">
                    <i class="bx bx-search"></i>
                </button>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Harga</th>
                            <th>Metode</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration + ($orders->currentPage() - 1) * $orders->perPage() }}</td>
                            <td>{{ $order?->id }}</td>
                            <td>{{ $order?->user?->name}}</td>
                            <td>{!! nl2br(e(wordwrap($order?->alamat, 50, "\n", true))) !!}</td>
                            <td>{{ $order?->telepon }}</td>
                            <td>{{ number_format($order->total) }}</td>
                            <td>{{ $order?->metode }}</td>
                            <td><span class="badge bg-{{$order?->status_pembayaran == 'lunas' ?'success':'secondary'}} text-white fs-11">{{ $order?->status_pembayaran }}</span></td>
                            <td>{{ $order?->tanggal ? \Carbon\Carbon::parse($order->tanggal)->format('d/m/Y') : '-' }}</td>
                            <td>
                                <a href="{{ route('pesanan.detail', $order->id) }}" class="btn btn-sm btn-primary">

                                    <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="mt-3 d-flex justify-content-center">
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush