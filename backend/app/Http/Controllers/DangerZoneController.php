<?php
namespace App\Http\Controllers;

use App\Models\DangerZone;
use Illuminate\Http\Request;

class DangerZoneController extends Controller
{
    public function index()
    {
        $dangerZones = DangerZone::all();
        return response()->json($dangerZones);
    }

    public function store(Request $request)
    {
        $dangerZone = DangerZone::create($request->all());
        return response()->json($dangerZone, 201);
    }

    public function show($id)
    {
        $dangerZone = DangerZone::findOrFail($id);
        return response()->json($dangerZone);
    }

    public function update(Request $request, $id)
    {
        $dangerZone = DangerZone::findOrFail($id);
        $dangerZone->update($request->all());
        return response()->json($dangerZone, 200);
    }

    public function destroy($id)
    {
        DangerZone::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}