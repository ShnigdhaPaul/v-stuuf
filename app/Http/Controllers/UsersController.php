<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('users.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['email', 'required'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

      // try {
           $user = User::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
           ]);
            $user->syncPermissions($request->permissions, []);
            return redirect()->route('user.index')->with('msg', "User has created successfully");

      //}catch(\Exception $e) {
         //   return redirect()->back()->with('msg', 'User not registered');
     //  }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $permissions = Permission::all();
        return view('users.edit', compact(['user', 'permissions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['email', 'required'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

       try {
           $user->update([
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
           ]);
            $user->syncPermissions($request->permissions, []);
            return redirect()->route('users.index')->with('msg', "User has updated successfully");

      }catch(\Exception $e) {
            return redirect()->back()->with('msg', 'User not updated');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            $user->revokePermissionTo($user->permissions);
     
             }catch(\Exception $e){
                 return redirect()->back()->with('msg', "User not deleted");
             }
             return redirect()->route('user.index')->with('msg', "User has deleted successfully");
    }
}
