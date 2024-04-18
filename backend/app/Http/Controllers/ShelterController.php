<?php
namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function index()
    {
        $shelters = Shelter::all();
        return response()->json($shelters);
    }

    public function store(Request $request)
    {
        $shelter = Shelter::create($request->all());
        return response()->json($shelter, 201);
    }

    public function show($id)
    {
        $shelter = Shelter::findOrFail($id);
        return response()->json($shelter);
    }

    public function update(Request $request, $id)
    {
        $shelter = Shelter::findOrFail($id);
        $shelter->update($request->all());
        return response()->json($shelter, 200);
    }

    public function destroy($id)
    {
        Shelter::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}