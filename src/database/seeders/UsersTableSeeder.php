<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '管理太郎',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('Admin12345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗太郎',
            'role' => 'owner',
            'email' => 'owner1@example.com',
            'password' => bcrypt('Owner12345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗次郎',
            'role' => 'owner',
            'email' => 'owner2@example.com',
            'password' => bcrypt('Owner22345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗三郎',
            'role' => 'owner',
            'email' => 'owner3@example.com',
            'password' => bcrypt('Owner32345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗四郎',
            'role' => 'owner',
            'email' => 'owner4@example.com',
            'password' => bcrypt('Owner42345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗五郎',
            'role' => 'owner',
            'email' => 'owner5@example.com',
            'password' => bcrypt('Owner52345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗六郎',
            'role' => 'owner',
            'email' => 'owner6@example.com',
            'password' => bcrypt('Owner62345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗七郎',
            'role' => 'owner',
            'email' => 'owner7@example.com',
            'password' => bcrypt('Owner72345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗八郎',
            'role' => 'owner',
            'email' => 'owner8@example.com',
            'password' => bcrypt('Owner82345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗九郎',
            'role' => 'owner',
            'email' => 'owner9@example.com',
            'password' => bcrypt('Owner92345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗十郎',
            'role' => 'owner',
            'email' => 'owner10@example.com',
            'password' => bcrypt('Owner102345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗一子',
            'role' => 'owner',
            'email' => 'owner11@example.com',
            'password' => bcrypt('Owner112345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗二子',
            'role' => 'owner',
            'email' => 'owner12@example.com',
            'password' => bcrypt('Owner122345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗三子',
            'role' => 'owner',
            'email' => 'owner13@example.com',
            'password' => bcrypt('Owner132345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗四子',
            'role' => 'owner',
            'email' => 'owner14@example.com',
            'password' => bcrypt('Owner142345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗五子',
            'role' => 'owner',
            'email' => 'owner15@example.com',
            'password' => bcrypt('Owner152345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗六子',
            'role' => 'owner',
            'email' => 'owner16@example.com',
            'password' => bcrypt('Owner162345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗七子',
            'role' => 'owner',
            'email' => 'owner17@example.com',
            'password' => bcrypt('Owner172345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗八子',
            'role' => 'owner',
            'email' => 'owner18@example.com',
            'password' => bcrypt('Owner182345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗九子',
            'role' => 'owner',
            'email' => 'owner19@example.com',
            'password' => bcrypt('Owner192345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '店舗十子',
            'role' => 'owner',
            'email' => 'owner20@example.com',
            'password' => bcrypt('Owner202345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
    }
}
