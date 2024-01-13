<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ContributorValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan Data Kontributor
        $contributors = User::where('role', 'kontributor')->get();

        return view('admin/validation/index', compact('contributors'));

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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAccepted(Request $request, $id)
    {


        $contributor = User::findOrFail($id);

        $contributor->validation = 'diterima';
        $contributor->save();

        return redirect()->route('admin.validation');
    }

    public function updateRejected(Request $request, $id)
    {


        $contributor = User::findOrFail($id);

        $contributor->validation = 'ditolak';
        $contributor->save();

        return redirect()->route('admin.validation');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
