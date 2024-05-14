<?php

namespace App\Http\Controllers;

use App\Models\select2;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['select2'] = select2::where('tempatlahir_mhs', 'like', "%{$search}%")->get();
        } else {
            $data['select2'] = select2::all();
        }
        return view('layouts.digitalisasi.data_mhs.index', $data);


        //
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
    public function show(select2 $select2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(select2 $select2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, select2 $select2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(select2 $select2)
    {
        //
    }
}
