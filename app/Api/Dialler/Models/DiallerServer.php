<?php namespace MySecurePortal\Api\Dialler\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiallerServer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'server_type_id',
        'name',
        'ip_address',
        'description',
        'hostname',
    ];

}