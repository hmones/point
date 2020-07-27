<?php namespace Hmones\Conference\Models;

use Model;

/**
 * Model
 */
class Session extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_conference_sessions';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'speakers' => ['Hmones\Conference\Models\Speaker', 'table' => 'hmones_conference_session_speaker'],
    ];

    public $belongsTo = [
        'day' => 'Hmones\Conference\Models\Day',
    ];

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['day_title','session_header', 'session_title', 'facilitators'];

    protected $jsonable = ['facilitators'];
}
