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
	}

}

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array('email' => 'foo@bar.com', 'name' => 'foo'));
        User::create(array('email' => 'hoge@hage.com', 'name' => 'hoge'));
        User::create(array('email' => 'coach@example.com', 'name' => 'coach'));
    }
 
}