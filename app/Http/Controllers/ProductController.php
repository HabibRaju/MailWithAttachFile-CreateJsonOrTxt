<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            return Datatables::of(Product::query())

            ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-danger" }}')

            ->setRowId(function ($product) {

                return $product->id;
            })

            ->editColumn('created_at', function(Product $product) {

                return $product->created_at->diffForHumans();
            })
            ->make(true);
        }

        return view('products_view');
    }
}
