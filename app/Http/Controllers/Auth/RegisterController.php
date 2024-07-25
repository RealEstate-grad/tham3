<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function UserRegister(RegisterRequest $request)
{
    // Validate the role field
   $data = $request->validated();

    // Create a new user instance with the role
//$data['password']=> Hash::make($request->password);
$data['role']='user';
    $user = User::create($data);

    // Optionally, you can log the user in or return a success response
    // Auth::login($user);

    return response()->json(['message' => 'User registered successfully!'], 201);
} public function AdminRegister(RegisterRequest $request)
{
    // Validate the role field
   $data = $request->validated();

    // Create a new user instance with the role
//$data['password']=> Hash::make($request->password);
$data['role']='admin';
    $user = User::create($data);

    // Optionally, you can log the user in or return a success response
    // Auth::login($user);

    return response()->json(['message' => 'Admin registered successfully!'], 201);
} public function CompanyRegister(RegisterRequest $request)
{
    // Validate the role field
   $data = $request->validated();

    // Create a new user instance with the role
//$data['password']=> Hash::make($request->password);
$data['role']='company';
    $user = User::create($data);

    // Optionally, you can log the user in or return a success response
    // Auth::login($user);

    return response()->json(['message' => 'Company registered successfully!'], 201);
}
}