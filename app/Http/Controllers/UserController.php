<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" => "47c5be9c-2f42-4f39-ab2b-1077d81033d2",
                "name" => "Dark magenta",
                "email" => "rjackson@outlook.com",
                "phone" => "+12395276634",
                "role" => "staff"
            ],
            [
                "id" => "07bdb8e0-42d5-4829-972a-51521db120d3",
                "name" => "Cyan",
                "email" => "dgray@live.com",
                "phone" => "+17370592494",
                "role" => "admin"
            ],
            [
                "id" => "3a9117b8-4041-4388-bcbb-078857836063",
                "name" => "Bright green",
                "email" => "ascott@yahoo.com",
                "phone" => "+16792778259",
                "role" => "staff"
            ],
            [
                "id" => "5702f686-1d20-4cc7-a469-9d16a58e8129",
                "name" => "Pansy purple",
                "email" => "t.richardson@gmail.com",
                "phone" => "+14582121863",
                "role" => "staff"
            ],
            [
                "id" => "2863cffe-33b8-480d-a1e9-86c0878ecf7a",
                "name" => "Cinereous",
                "email" => "timothy.w@hotmail.com",
                "phone" => "+19255530215",
                "role" => "staff"
            ],
            [
                "id" => "12e38cea-6894-4435-9c74-cc600c5af626",
                "name" => "Laurel green",
                "email" => "kayla_washington12@yahoo.com",
                "phone" => "+14093490699",
                "role" => "staff"
            ],
            [
                "id" => "3591e16e-e3a2-47f4-8b88-97749431ad92",
                "name" => "Pale silver",
                "email" => "jeramirez@hotmail.com",
                "phone" => "+14142719533",
                "role" => "staff"
            ],
            [
                "id" => "28262445-67ba-4a63-86ce-9be37330eab3",
                "name" => "Mulberry",
                "email" => "mark_ward53@aol.com",
                "phone" => "+17063911858",
                "role" => "staff"
            ],
            [
                "id" => "bd65d083-6225-487e-9564-b4d6e7b1ce8a",
                "name" => "Madder Lake",
                "email" => "meganharris@aol.com",
                "phone" => "+19138987726",
                "role" => "admin"
            ],
            [
                "id" => "66b4ba66-22b0-4f24-be3b-25f729153840",
                "name" => "Dark lava",
                "email" => "h.alexander@outlook.com",
                "phone" => "+15138647674",
                "role" => "admin"
            ]
        ];

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return 'Ini halaman create';
    }
}
