<?php namespace Dizoo\Partners\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

/**
 * Model
 */
class Partners extends Model
{
    use Validation;
    use Sortable;

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dizoo_partners_main';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'image' => 'required'
    ];
}
