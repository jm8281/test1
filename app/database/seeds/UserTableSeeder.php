<?php


class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(array(
            'username'=>'admin',
            'email'=>'admin@admin.admin',
            'password'=>Hash::make('123456'),
            'created_at'=>date('Y-m-d H:i:s',time()),
    ));
    }
}