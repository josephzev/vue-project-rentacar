<?php namespace Joseph\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Reservation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $belongsTo = [
          
          'vehicle' => 'Joseph\Vuerentacar\Models\Vehicle',

          'user' => 'RainLab\User\Models\User'

    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'joseph_vuerentacar_reservations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
