<?php

namespace App\Http\Controllers;

use Datatables;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $tableData = DB::table('products')
                ->join('vats', 'products.vat_id', '=', 'vats.id')
                ->selectRaw('products.id, products.ref, products.name, products.bar_code, CONCAT(vats.tax_percent, \'%\') as vat, CONCAT(ROUND(products.price_without_vat, 2), \'€\') as price_without_vat, CONCAT(ROUND(products.price_without_vat * (vats.tax_percent/100 + 1),2), \'€\') as price_with_vat')
                ->get();

            return Datatables::of($tableData)
                ->addColumn('action', function($tableData){
                    $btn = '<a href="' . route('products.show', $tableData->id) . '">View</a> | ';
                    $btn = $btn.'<a href="' . route('products.edit', $tableData->id) . '">Edit</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view ('products.index');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
