<?php namespace Hmones\Conference\Models;

use Model;

/**
 * Model
 */
class Day extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_conference_days';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title'];

    public $hasMany = [
        'sessions' => 'Hmones\Conference\Models\Session'
    ];


}
