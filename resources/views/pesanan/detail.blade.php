    @extends('layouts.app')
    @section('title', 'Detail Pesanan')
    @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- Breadcrumb dinamis --}}
        <x-breadcrumb :items="[
'Pesanan' => route('pesanan.index'),
'Detail Pesanan' => ''
]" />
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="mb-4">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="bx bx-arrow-back"></i> Kembali
                </a>
            </div>
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card">
                    <div class="card-body">
                        @php
                        $no = 1;
                        $values = [
                        ['Order iD',$order?->id],
                        ['Nama',$order?->user?->name],
                        ['Alamat',$order?->alamat],
                        ['Telepon',$order?->telepon],
                        ['Metode',$order?->metode],
                        ['Status Pembayaran',$order?->status_pembayaran],
                        ['Tanggal',$order?->tanggal ? \Carbon\Carbon::parse($order->tanggal)->format('d/m/Y') : '-'],
                        ];
                        @endphp
                        <table>
                            @foreach($values as $value)
                            <tr>
                                <td>{{$value[0]}}</td>
                                <td>:</td>
                                <td>{{$value[1]}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>Bukti Pembayaran</td>
                                <td>:</td>
                                <td>
                                    @if($order->bukti_pembayaran)
                                <img src="{{ $order->bukti_pembayaran? asset('storage/payment/' . $order->bukti_pembayaran): asset('assets/img/default-product.png') }}"  class="img-thumbnail" width="80" />
                                @endif
                                
                            </tr>
                        </table>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga Satuan</th>
                                        <th>Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->details as $detail)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$detail?->product?->nama}}</td>
                                        <td>{{number_format($detail->jumlah)}}</td>
                                        <td>{{number_format($detail->harga_satuan)}}</td>
                                        <td>{{number_format($detail->harga_satuan * $detail->jumlah)}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4"> Total </td>
                                        <td>{{number_format($order->total)}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection