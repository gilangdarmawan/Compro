<?php namespace Agit\AgitPost\Models;

use Model;

/**
 * Model
 */
class Post extends Model
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
    public $table = 'agit_agitpost_';

    public $attachOne = [
      'iconslider' =>'System\Models\File'
    ];

    public function getCategoryOptions()
    {
        return ['EBA' => 'EBA', 'Digital Platform' => 'Digital Platform'];
    }

    public function getSubCategoryOptions(){
      if ($this->Category == 'ICT') {
        return ['EBA' => 'EBA', 'qld' => 'Queensland'];
      }
      elseif ($this->Category == 'Digital Platform') {
          return array('1' => 'USA', 2 => 'Canada');
      }
    }
}
