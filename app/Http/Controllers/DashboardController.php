<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKategori = Category::count();
        $jumlahProduk = Product::count();
        $jumlahUser = User::where('username', '!=', 'Admin')->count();
        return view('pages.admin.dashboard', compact('jumlahKategori', 'jumlahProduk', 'jumlahUser'));
    }
}
