<?php

namespace MySecurePortal\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $defaultPagination = 10;

    protected $request = null;

    protected $fractal = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->fractal = new Manager();
    }

    protected function transform($data)
    {
        $data = $this->fractal->createData($data);

        $arrayResult = $data->toArray();
        $arrayResult['success'] = true;

        return $arrayResult;
    }

    protected function transformCollection($data, $transformer)
    {
        $transformedData = new Collection($data, new $transformer());

        return $this->transform($transformedData);
    }

    protected function transformItem($data, $transformer)
    {
        $transformedData = new Item($data, new $transformer());

        return $this->transform($transformedData);
    }

    protected function throwErrorMessage($message, $code = 501)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }

}
