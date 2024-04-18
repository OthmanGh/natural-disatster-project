<?php
namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Models\Guest;

class AlertController extends Controller
{
    public function addAlert(Request $request, $guestId)
    {
    
        $guest = Guest::where('unique_identifier', $guestId)->firstOrFail();
       
        $alert = new Alert();
        $alert->content = $request->input('content');
        $alert->guest_id = $guest->id; 
        $alert->save();

        return response()->json(['message' => 'Alert added successfully'], 201);
    }

  
    public function getAlertsByGuestId($guestId)
    {
        $guest = Guest::where('unique_identifier', $guestId)->firstOrFail();

        $alerts = Alert::where('guest_id', $guest->id)->get();

        return response()->json($alerts);
    }

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