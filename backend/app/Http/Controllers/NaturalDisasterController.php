<?php
namespace App\Http\Controllers;

use App\Models\NaturalDisaster;
use Illuminate\Http\Request;

class NaturalDisasterController extends Controller
{
    public function index()
    {
        $naturalDisasters = NaturalDisaster::all();
        return response()->json($naturalDisasters);
    }

    public function store(Request $request)
    {
        $naturalDisaster = NaturalDisaster::create($request->all());
        return response()->json($naturalDisaster, 201);
    }

    public function show($id)
    {
        $naturalDisaster = NaturalDisaster::findOrFail($id);
        return response()->json($naturalDisaster);
    }

    public function update(Request $request, $id)
    {
        $naturalDisaster = NaturalDisaster::findOrFail($id);
        $naturalDisaster->update($request->all());
        return response()->json($naturalDisaster, 200);
    }

    public function destroy($id)
    {
        NaturalDisaster::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}