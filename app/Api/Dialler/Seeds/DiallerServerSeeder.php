<?php namespace MySecurePortal\Api\Dialler\Seeds;

use Illuminate\Database\Seeder;
use MySecurePortal\Api\Dialler\Models\DiallerServer;

class DiallerServerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiallerServer::create([
            'server_type_id' => 1,
            'name' => 'Test Server',
            'ip_address' => '10.10.1.100',
            'description' => 'This is a test server!',
            'hostname' => 'test.mysecuredialler.net',
        ]);
    }
}