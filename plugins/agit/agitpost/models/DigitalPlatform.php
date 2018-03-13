<?php namespace Agit\AgitPost\Models;

use Model;

/**
 * Model
 */
class DigitalPlatform extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title','desc'];
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
}
