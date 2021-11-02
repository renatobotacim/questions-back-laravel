<?php

namespace App\Models;

/**
 * inf_transferencias data model
 *
 * @author Renato
 */
use Illuminate\Database\Eloquent\Model;

/**
 * Description of userTipes
 *
 * @author Renato
 */
class dimensions extends Model implements \JsonSerializable{

    /**
     * Bank table for this model
     * @var string
     */
    protected $table = 'dimensions';

    /**
     * Primary key
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'deleted'
    ];

    /**
     * active timestamps
     * timestamp is used in transferencia_data for execution registred
     * @var bool
     */
    public $timestamps = true;

    
    /**
     * Validation Rules for Table Fields
     * @var array
     */
    const RULE_DIMENSIONS = [
        'name' => 'required|max:45'
    ];

}
