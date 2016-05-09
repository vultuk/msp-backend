<?php namespace MySecurePortal\Http\Controllers\Api\Version1\Diallers;

use MySecurePortal\Api\Dialler\Models\DiallerServer;
use MySecurePortal\Api\Dialler\Transformers\DiallerServerTransformer;
use MySecurePortal\Http\Controllers\Controller;

class Servers extends Controller
{

    public function index()
    {
        $servers = DiallerServer::paginate($this->request->get('take', $this->defaultPagination));
        
        $transformedServers = \League\Fractal::collection($servers, new DiallerServerTransformer);

        return $transformedServers->jsonRequest(200);
    }

}