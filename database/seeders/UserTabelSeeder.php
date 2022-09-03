<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTabelSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admin = User::create([
      'name' => 'Admin',
      'email' => 'admin@mail.com',
      'password' => bcrypt('password'),
    ]);

    $admin->assignRole('admin');
  }
}
