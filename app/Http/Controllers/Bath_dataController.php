<?php

namespace App\Http\Controllers;

use App\Models\bath_data;
use Illuminate\Http\Request;

class Bath_dataController extends Controller
{
    /**
     * お風呂のデータを一覧表示するための関数
     */
    public function index()
    {
        $bath_datas = bath_data::latest()->paginate(5);

        return view('bath_data_index', compact('bath_datas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     */
    public function create()
    {
        return view('bath_data_create');
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
    public function show(bath_data $bath_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bath_data $bath_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bath_data $bath_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bath_data $bath_data)
    {
        //
    }
}
