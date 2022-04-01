<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $product = Product::all();
        return view('home', compact('product'));
    }

    public function exportPDF() {

        $p = Product::all();
        view()->share('p', $p);
        $pdf_doc = PDF::loadView('export_pdf', $p);
        return $pdf_doc->download('pdf.pdf');
    }
}
