<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PHPUnit\TextUI\Configuration\Php;

class ContributorValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan Data Kontributor
        $contributors = User::where('role', 'kontributor')->get();
    
        if ($contributors->isEmpty()) {
            return $this->responseError('There is no  contributor.');
        } else {
            return $this->responseSuccess($contributors, 'Successfully displays contributor data', 200);
        }
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
    public function update(Request $request, $id)
    {


        $contributor = User::find($id);

        if (!$contributor) {
            return $this->responseError('Contributor not found.', 404);
        }

        $validatedData = $request->validate([
            'validation' => 'required|in:diterima,ditolak',
        ]);

        $contributor->validation = $validatedData['validation'];
        $contributor->save();
    
        return $this->responseSuccess($contributor, 'Validation column updated successfully.', 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
