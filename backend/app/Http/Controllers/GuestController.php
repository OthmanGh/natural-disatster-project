<?php
namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Location;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return response()->json($guests);
    }

    public function store(Request $request)
    {
        $latitude = $request->input('lat');
        $longitude = $request->input('long');
        $uniqueIdentifier = $request->input('unique_identifier');
        $email = $request->input('email');

        $location = Location::create([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);

        $locationId = $location->id;

        $guest = Guest::create([
            'location_id' => $locationId,
            'unique_identifier' => $uniqueIdentifier,
            'email' => $email,
        ]);

        return response()->json($guest, 201);
    }

    public function show(Request $request)
    {
        $uniqueIdentifier = $request->input('unique_identifier');
        $guest = Guest::where('unique_identifier', $uniqueIdentifier)->first();
    
        if (!$guest) {
            return response()->json(['message' => 'Guest not found'], 404);
        }
    
        return response()->json($guest, 200);
    }
    

    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);
        $guest->update($request->all());
        return response()->json($guest, 200);
    }

    public function destroy($id)
    {
        Guest::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}