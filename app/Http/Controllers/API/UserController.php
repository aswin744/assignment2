<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'equired|string',
        'email' => 'equired|string|unique:users,email,'. $id,
        'city' => 'equired|string',
        'obile' => 'equired|string',
    ]);

    $user = User::find($id);
    $user->update($validatedData);

    return response()->json(['message' => 'User updated successfully']);
}
    public function index()
    {
    $users = User::paginate(5);
    return response()->json($users);
    }
    public function destroy($id)
{
    $user = User::find($id);
    $user->delete();

    return response()->json(['message' => 'User deleted successfully']);
}
}
