@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="mb-0 fw-semibold">Dashboards</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                <!-- <li class="breadcrumb-item active">Agent</li> -->
            </ol>
        </div>
    </div>
</div>
<div class="row">
    @foreach($boxs as $box)
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-2 fs-15 fw-medium">{{$box[0]}}</p>
                        <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">{{number_format($box[1])}}</h3>
                    </div>
                    <div>
                        <div class="avatar-md {{$box[2]}} bg-opacity-10 rounded">
                            <iconify-icon icon="solar:{{$box[3]}}" class="fs-32 text-primary avatar-title">
                            </iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Pesanan Terbaru
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
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $no++ }}</td>
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
        </div>
        </div>
    </div>
    
</div>
@endsection