<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('SportTableSeeder');
        $this->command->info('Sport table seeded!');
	}

}

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();

        $password = Hash::make('password');
 
        User::create(array('email' => 'foo@bar.com', 'username' => 'foo', 'birth' => '1990/08/30', 'gender' => '0', 'nationality' => 'Canada', 'password' => $password));
        User::create(array('email' => 'hoge@hage.com', 'username' => 'hoge', 'password' => $password));
        User::create(array('email' => 'coach@example.com', 'username' => 'coach', 'password' => $password));
        User::create(array('email' => 'hosokawa@example.com', 'username' => 'hosokawa', 'birth' => '1987/03/17', 'gender' => '0', 'nationality' => 'Japan', 'coach' => '1', 'password' => $password));
        User::create(array('email' => 'takeyama@example.com', 'username' => 'Naoto Takeyama', 'birth' => '1987/07/21', 'gender' => '0', 'nationality' => 'Japan', 'coach' => '1', 'password' => $password));
    }
 
}

class SportTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('sports')->delete();

        Sport::create(array('name' => 'Ice Hockey'));
        Sport::create(array('name' => 'Handball'));
        Sport::create(array('name' => 'American Football'));
        Sport::create(array('name' => 'Baseball'));
        Sport::create(array('name' => 'Sepak Takraw'));
        Sport::create(array('name' => 'Volleyball'));
        Sport::create(array('name' => 'Beach Volleyball'));
        Sport::create(array('name' => 'Football'));
    }
 
}