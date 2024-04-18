<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Alert;
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
}