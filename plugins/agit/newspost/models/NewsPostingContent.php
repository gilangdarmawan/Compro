<?php namespace Agit\NewsPost\Models;

use Model;
use Debugbar;

/**
 * Model
 */
class NewsPostingContent extends Model
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
    public $table = 'agit_newspost_content_element';

    // public $belongsToMany = [
    //     'news_ids' => [
    //         'agit\newspost\Models\newspostingtitle',
    //         'table' => 'agit_newspost_title',
    //         'order' => 'news_id'
    //     ]
    // ];

public $attachOne = [
      'contentImage' =>'System\Models\File'
    ];

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title_en','description_content_en'];

    public function afterDelete(){
      $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/delete/']);

      $response = $client->request('POST', 'agit', [
          'json' => [
            'content_id' => $this->news_id,
            'contentelement_id' => $this->title_content_id,
            'api_type' => $this->title_content_en
          ]
      ]);
    }

    public function beforeSave(){
      try {

        if($this->content_id!=null){
          //update section
          $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/update/']);
          // Send a request to http://54.254.239.106/Astragraphia/public/news/create/agit

          //FORM DATA (ALTERNATIF FROM JSON)
          $response = $client->request('POST', 'agit', [
              'json' => [
                'content_id' => $this->news_id,
                'title' => $this->title_content_id,
                'title_en' => $this->title_content_en,
                'description' => $this->description_content_id,
                'description_en' => $this->description_content_en,
                'image' => $this->image_content,
                'image_width' => $this->image_width,
                'type' => $this->type_content,
                'api_type' => $this->api_type,
                'precedence' => $this->precedence_content,
                'contentelement_id' => $this->content_id
              ]
          ]);

          //get status code from response server agit
          Debugbar::info($response->getStatusCode());

          $body = (string) $response->getBody();
          Debugbar::info($body);
        }
        else{
          //create section
          $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/create/']);
          // Send a request to http://54.254.239.106/Astragraphia/public/news/create/agit

          //FORM DATA (ALTERNATIF FROM JSON)
          $response = $client->request('POST', 'agit', [
              'json' => [
                'content_id' => $this->news_id,
                'title' => $this->title_content_id,
                'title_en' => $this->title_content_en,
                'description' => $this->description_content_id,
                'description_en' => $this->description_content_en,
                'image' => $this->image_content,
                'image_width' => $this->image_width,
                'type' => $this->type_content,
                'api_type' => $this->api_type,
                'precedence' => $this->precedence_content,
              ]
          ]);

          //get status code from response server agit
          $this->content_id = (string)$response->getBody();

        }

      } catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
      }

    }
}
