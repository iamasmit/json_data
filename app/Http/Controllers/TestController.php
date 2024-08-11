<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $test = Test::get();
        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Method 1
        // $test = New Test;
        // $test->meta_data = [
        //     'name'=>'Aloe Byoden',
        //     'age'=>'25',
        //     'gender'=>'male',
        // ];
        // $test->save();
        //Method 2
        $test = Test::create([
            'meta_data' => [
                'name'=>'Aloe Byoden',
                'age'=>'25',
                'gender' => 'male',
                'address' => [
                    'street' => '123 Main St',
                    'city' => 'KTM',
                    'country' => 'Nepal'
                ]
            ]
                
                ]);
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
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
