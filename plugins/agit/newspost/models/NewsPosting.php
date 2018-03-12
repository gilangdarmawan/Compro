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

    // public $implement = [
    //         'Backend.Behaviors.FormController',
    //         'Backend.Behaviors.RelationController',
    //     ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    // public $timestamps = false;

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
      try {
        // Create a client with a base URI
        $client = new GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/create/']);
        // Send a request to http://54.254.239.106/Astragraphia/public/news/create/agit
        $response = $client->request('POST', 'agit');

        //FILL THE POST Data
        $post_data = array(
            'title' => $this->title,
            'title_en' => $this->title_en,
            'alias' => $this->alias,
            'alias_en' => $this->alias_en,
            'topic_id' => $this->topic_id,
            'created_at' => $this->created_at,
            'meta_title' => $this->meta_title,
            'meta_title_en' => $this->meta_title_en,
            'meta_description' => $this->meta_description,
            'meta_description_en' => $this->meta_description_en,
            'meta_image' => $this->meta_image,
            'api_type' => $this->api_type
        );

        $data = json_encode($post_data);

      } catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
      }

    }

    // public function afterSave($model){
    //       $client = new Client([
    //         // Base URI is used with relative requests
    //         'base_uri' => 'http://httpbin.org',
    //         // You can set any number of default request options.
    //         'timeout'  => 2.0,
    //       ]);
    // }
}
