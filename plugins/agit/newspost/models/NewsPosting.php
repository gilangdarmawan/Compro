<?php namespace Agit\NewsPost\Models;

use Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use GuzzleHttp\Client;

/**
 * Model
 */
class NewsPosting extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'agit_newspost_';

    // public function beforeSave($model){
    //     $uuid4 = Uuid::uuid4();
    //     $this->$id = $uuid4->toString();
    // }
    //
    // public function afterSave($model){
    //       $client = new Client([
    //         // Base URI is used with relative requests
    //         'base_uri' => 'http://httpbin.org',
    //         // You can set any number of default request options.
    //         'timeout'  => 2.0,
    //       ]);
    // }
}
