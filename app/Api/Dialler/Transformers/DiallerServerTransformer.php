<?php namespace MySecurePortal\Api\Dialler\Transformers;

use League\Fractal\TransformerAbstract;
use MySecurePortal\Api\Dialler\Models\DiallerServer;

class DiallerServerTransformer extends TransformerAbstract
{

    public function transform(DiallerServer $server)
    {
        return [
            'id' => $server->id,
            'name' => $server->name,
            'ip_address' => $server->ip_address,
            'description' => $server->description,
            'hostname' => $server->hostname,
        ];
    }
    
}