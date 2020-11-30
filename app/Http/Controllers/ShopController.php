<?php


namespace App\Http\Controllers;


use App\Models\Jeans;

class ShopController
{
    public function index()
    {
        $jeans = Jeans::all();

        return view('shop.index', ['jeans' => $jeans]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

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
