<?php namespace Joseph\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*relations*/

    public $belongsToMany = [

        'locations' =>[

            'Joseph\Vuerentacar\Models\Location',

            'table' => 'joseph_vuerentacar_vehicles_locations',

            'order' => 'title'

        ],
        'dates' =>[

            'Joseph\Vuerentacar\Models\Date',

            'table' => 'joseph_vuerentacar_vehicles_dates',

            'order' => 'pickup'

        ]

    ];

    public $attachOne = [
         
         'image' => 'System\Models\File'

    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'joseph_vuerentacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
