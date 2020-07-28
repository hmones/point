<?php namespace Hmones\Conference\Models;

use Model;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_conference_videos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
