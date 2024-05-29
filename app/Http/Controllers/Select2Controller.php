<?php

namespace App\Http\Controllers;

use App\Models\select2;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function select2(Request $request)
    {
        $search = $request->search;

        if (empty($search)) {
            $tempatLahir = select2::select('tempatlahir_mhs')
                ->distinct()
                ->limit(10)
                ->get();
        } else {
            $tempatLahir = select2::select('tempatlahir_mhs')
                ->where('tempatlahir_mhs', 'like', '%' . $search . '%')
                ->distinct()
                ->limit(10)
                ->get();
        }

        $response = array();
        foreach ($tempatLahir as $tempat) {
            $response[] = array(
                "id" => $tempat->tempatlahir_mhs,
                "text" => $tempat->tempatlahir_mhs
            );
        }

        return response()->json($response);
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
