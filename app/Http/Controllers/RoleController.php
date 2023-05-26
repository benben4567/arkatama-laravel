<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // sample data contains id and name
        $roles = [
            [
                "id" => "47c5be9c-2f42-4f39-ab2b-1077d81033d2",
                "name" => "Admin",
            ],
            [
                "id" => "07bdb8e0-42d5-4829-972a-51521db120d3",
                "name" => "Staff",
            ],
        ];
        return view('role.index', compact('roles'));
    }
}
