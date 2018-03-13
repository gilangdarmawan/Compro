<?php namespace Agit\NewsPost\Models;

use Model;
use Debugbar;
/**
 * Model
 */
class NewsPostingTitle extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'agit_newspost_title';

    public $attachOne = [
      'titleImage' =>'System\Models\File'
    ];

     public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
     public $translatable = ['title_en','alias_en','meta_title_en','meta_description_en'];

    // public function beforeSave(){
    //   //SEND API TO EXTERNAL API
    // }
    protected $jsonable = ["topic_id"];

    public function afterDelete(){
      $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/delete/']);

      $response = $client->request('POST', 'agit', [
          'json' => [
            'parents_articleID' => $this->news_id
          ]
      ]);

    }

    public function beforeSave(){
      try {
        if($this->news_id != null){
          // THIS IS UPDATE API BELOW
          Debugbar::info("title = ". $this->title_en);
          // Create a client with a base URI
          $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/update/']);

          // FILTER TOPIC_ID INTO FORMAT 1,2,3,4,etc
          if($this->topic_id != null){
            $topicid = $this->topic_id;
            $topicid2 = str_replace("[","",$topicid);
            $topicid3 = str_replace("]","",$topicid2);
            $topicid4 = str_replace("\"","",$topicid3);

            $topicid5 = implode(",",$topicid);
            Debugbar::info($topicid5);
          }
          else{
            $topicid5 = "";
          }
          $datenow = date("Y-m-d H:i:s");

          $response = $client->request('POST', 'agit', [
              'json' => [
                'title' => $this->title_id,
                'title_en' => $this->title_en,
                'alias' => $this->alias_id,
                'alias_en' => $this->alias_en,
                'topic_id' => $topicid5,
                'created_at' => date("Y-m-d H:i:s"),
                'meta_title' => $this->meta_title_id,
                'meta_title_en' => $this->meta_title_en,
                'meta_description' => $this->meta_description_id,
                'meta_description_en' => $this->meta_description_en,
                'meta_image' => $this->meta_image,
                'api_type' => $this->api_type,
                'parents_articleID' => $this->news_id
              ]
          ]);

          //debug mode
          // Debugbar::info($topicid);
          // Debugbar::info(date("Y-m-d H:i:s"));
          // Debugbar::info("api_tyype = ". $this->api_type);
          // Debugbar::info("title = ". $this->title_en);
          // Debugbar::info("api_tyype = ". $this->title_id);
          // Debugbar::info("api_tyype = ". $this->alias_id);
          // Debugbar::info("api_tyype = ". $this->alias_en);
          // Debugbar::info("api_tyype = ". $this->meta_title_id);
          // Debugbar::info("api_tyype = ". $this->meta_title_en);
          // Debugbar::info("api_tyype = ". $this->meta_description_id);
          // Debugbar::info("api_tyype = ". $this->meta_description_en);
          // Debugbar::info("api_tyype = ". $this->meta_image);

          //$this->news_id = (string)$response->getBody();
          Debugbar::info($response->getStatusCode());

          $body = (string) $response->getBody();
          Debugbar::info($body);
        }else{
          // THIS IS INSERT API BELOW

          // Create a client with a base URI
          $client = new \GuzzleHttp\Client(['base_uri' => 'http://54.254.239.106/Astragraphia/public/news/create/']);
          // Send a request to http://54.254.239.106/Astragraphia/public/news/create/agit

          // FILTER TOPIC_ID INTO FORMAT 1,2,3,4,etc
          if($this->topic_id != null){
            $topicid = $this->topic_id;
            $topicid2 = str_replace("[","",$topicid);
            $topicid3 = str_replace("]","",$topicid2);
            $topicid4 = str_replace("\"","",$topicid3);

            $topicid5 = implode(",",$topicid);
            Debugbar::info($topicid5);
          }

          //debug mode
          // Debugbar::info($topicid);
          // Debugbar::info(date("Y-m-d H:i:s"));
          // Debugbar::info("api_tyype = ". $this->api_type);
          // Debugbar::info("title = ". $this->title_en);
          // Debugbar::info("api_tyype = ". $this->title_id);
          // Debugbar::info("api_tyype = ". $this->alias_id);
          // Debugbar::info("api_tyype = ". $this->alias_en);
          // Debugbar::info("api_tyype = ". $this->meta_title_id);
          // Debugbar::info("api_tyype = ". $this->meta_title_en);
          // Debugbar::info("api_tyype = ". $this->meta_description_id);
          // Debugbar::info("api_tyype = ". $this->meta_description_en);
          // Debugbar::info("api_tyype = ". $this->meta_image);

          $response = $client->request('POST', 'agit', [
              'json' => [
                'title' => $this->title_id,
                'title_en' => $this->title_en,
                'alias' => $this->alias_id,
                'alias_en' => $this->alias_en,
                'topic_id' => $topicid5,
                'created_at' => date("Y-m-d H:i:s"),
                'meta_title' => $this->meta_title_id,
                'meta_title_en' => $this->meta_title_en,
                'meta_description' => $this->meta_description_id,
                'meta_description_en' => $this->meta_description_en,
                'meta_image' => $this->meta_image,
                'api_type' => $this->api_type
              ]
          ]);

          //save value to news_id
          $this->news_id = (string)$response->getBody();
          Debugbar::info($response->getStatusCode());

          $body = (string) $response->getBody();
          Debugbar::info($body);
        }

      } catch (Exception $e) {
            //Debugbar::addThrowable($e);
      }

    }
}
