<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			"email" => "admin@lore.io",
			"password" => Hash::make('admin'),
			"name" => "Administrator",
			"status" => 1,
			"created_at" => new DateTime,
			"updated_at" => new DateTime,
		));
	}

}