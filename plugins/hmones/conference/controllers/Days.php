<?php namespace Hmones\Conference\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Days extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Hmones.Conference', 'sessions', 'days');
    }
}
