<?php


namespace App\Http\Controllers;


use App\Models\Jeans;

class ShopController
{
    public function index()
    {
        $jeans = Jeans::latest()->get();

        return view('shop.index', ['jeans' => $jeans]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {
        $article = Jeans::find($id);

        return view('shop.show', ['jeans' => $jeans]);
    }

    public function edit()
    {

    }

    public function update()
    {

    }


    public function destroy()
    {

    }
}
