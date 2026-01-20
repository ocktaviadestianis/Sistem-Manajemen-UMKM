<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category,Product,Order};
class DashboardController extends Controller
{
    public function home()
    {
        $data['boxs'] =[
    ['Kategori Produk',Category::count(),'bg-primary','calendar-date-broken'],
    ['Produk',Product::count(),'bg-primary','graph-new-broken'],
    ['Total Pesanan',Order::where('status_pembayaran','lunas')->count(),'bg-primary','user-plus-broken'],
    ['Belum Bayar',Order::where('status_pembayaran','pending')->count(),'bg-primary','chart-2-broken'],
    ];
    $data['orders'] = Order::where('status_pembayaran','lunas')->orderby('id','desc')->limit(10)->get();
        return view('home', $data);
    }
}
