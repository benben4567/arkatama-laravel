<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }
    
    public function create()
    {
        // tampilkan halaman create
        return view('role.create');
    }
    
    public function store(Request $request)
    {
        // insert data ke table roles
        $role = Role::create([
            'name' => $request->name,
        ]);
        
        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }
    
    public function edit($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // tampilkan view edit dan passing data role
        return view('role.edit', compact('role'));
    }
    
    public function update(Request $request, $id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // update data role
        $role->update([
            'name' => $request->name,
        ]);
        
        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }
    
    public function destroy($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // hapus data role
        $role->delete();
        
        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }
}
