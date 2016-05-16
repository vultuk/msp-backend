<?php namespace MySecurePortal\Http\Controllers\Api\Version1\Diallers;

use MySecurePortal\Api\Dialler\Models\DiallerServer as ResourceModel;
use MySecurePortal\Api\Dialler\Transformers\DiallerServerTransformer as Transformer;
use MySecurePortal\Api\Dialler\Validators\DiallerServerValidator as Validator;

use MySecurePortal\Http\Controllers\ResourceController as Controller;

class Servers extends Controller
{
    protected $resourceModel = ResourceModel::class;
    protected $transformer = Transformer::class;
    protected $validator = Validator::class;
}
