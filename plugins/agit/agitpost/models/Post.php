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
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title','desc'];
    //public $translatable = ['desc'];
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
      'icon' =>'System\Models\File'
    ];

    public function getCategoryOptions()
    {
        return ['ICT' => 'ICT', 'Digital Platform' => 'Digital Platform'];
    }

    public function getSubCategoryOptions(){
      if ($this->category == 'ICT') {
        //return array('1' => 'USA');
        return ['1' => 'USA'];
      }
      elseif ($this->category == 'Digital Platform') {
        //return array(2 => 'Canada');
        return ['2' => 'Canada'];
      }
      else{
        return false;
      }
    }
}
