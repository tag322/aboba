<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductResourceControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $value = Product::all()

        return $value
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductController $productController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductController $productController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductController $productController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductController $productController)
    {
        //
    }
}
