<?php
namespace App\Http\Controllers;

use App\Models\Guest;
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
        $guest = Guest::create($request->all());
        return response()->json($guest, 201);
    }

    public function show($id)
    {
        $guest = Guest::findOrFail($id);
        return response()->json($guest);
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