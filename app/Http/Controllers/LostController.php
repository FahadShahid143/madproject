<?php

namespace App\Http\Controllers;
use App\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    public function index()
    {
        return Lost::all();
    }

    public function show(Lost $lost)
    {
        return $lost;
    }

    public function store(Request $request)
    {
        $lost = Lost::create($request->all());

        return response()->json($lost, 201);
    }

    public function update(Request $request, Lost $lost)
    {
        $lost->update($request->all());

        return response()->json($lost, 200);
    }

    public function delete(Lost $lost)
    {
        $lost->delete();

        return response()->json(null, 204);
    }
}
