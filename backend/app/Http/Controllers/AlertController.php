<?php
namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index()
    {
        $alerts = Alert::all();
        return response()->json($alerts);
    }

    public function store(Request $request)
    {
        $alert = Alert::create($request->all());
        return response()->json($alert, 201);
    }

    public function show($id)
    {
        $alert = Alert::findOrFail($id);
        return response()->json($alert);
    }

    public function update(Request $request, $id)
    {
        $alert = Alert::findOrFail($id);
        $alert->update($request->all());
        return response()->json($alert, 200);
    }

    public function destroy($id)
    {
        Alert::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}