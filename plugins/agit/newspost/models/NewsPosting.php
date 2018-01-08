<?php namespace Agit\NewsPost\Models;

use Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

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

    public function beforeSave($model){
        $uuid4 = Uuid::uuid4();
        $this->$id = $uuid4->toString();
    }

    public function afterSave($model){
      $curl = curl_init();

      curl_setopt($curl, CURLOPT_POST, 1);

      if ($data)
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

      // Optional Authentication:
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($curl, CURLOPT_USERPWD, "username:password");

      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      $result = curl_exec($curl);

      curl_close($curl);

      return $result;
    }
}
