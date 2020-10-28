<?php

namespace Modules\Calculator\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($n1, $n2)
    {
        echo "Suma: " . ((int)$n1 + (int)$n2) . "<br>";
        echo "Resta: " . ((int)$n1 - (int)$n2)  . "<br>";
        echo "Multiplicacion: " . ((int)$n1 * (int)$n2) . "<br>";
        echo "Division: " . ((int)$n1 / (int)$n2);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('calculator::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('calculator::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('calculator::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
