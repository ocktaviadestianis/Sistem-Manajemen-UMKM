<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class PesananController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
       $orders = Order::when($search, function ($query, $search) {
        return $query->whereRelation('user','name', 'like', '%' . $search . '%')->orwhere('id', 'like', '%' . $search . '%');
        })->latest()->paginate(10);
        return view('pesanan.index', compact('orders'));
    }

    public function detail($id)
    {
       $order = Order::find($id);
        return view('pesanan.detail', compact('order'));
    }
    public function list(Request $request)
    {
        $search = $request->input('search');
       $orders = Order::where('status_pembayaran','pending')->when($search, function ($query, $search) {
        return $query->whereRelation('user','name', 'like', '%' . $search . '%')->orwhere('id', 'like', '%' . $search . '%');
        })->latest()->paginate(10);
        return view('pesanan.index', compact('orders'));
    }
    public function verif(Request $request)
    {
        $search = $request->input('search');
       $orders = Order::where('status_pembayaran','lunas')->when($search, function ($query, $search) {
        return $query->whereRelation('user','name', 'like', '%' . $search . '%')->orwhere('id', 'like', '%' . $search . '%');
        })->latest()->paginate(10);
        return view('pesanan.index', compact('orders'));
    }
}
