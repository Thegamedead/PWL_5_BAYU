<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(["name" => "pustakawan"]);
        Permission::create(["name" => "edit_buku"]);
        Role::create(["name" => "mahasiswa"]);
        Permission::create(["name" => "view_buku"]);
    }
}
