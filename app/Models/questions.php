<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * inf_tipos_usuario data model
 *
 * @author Renato
 */
class questions extends Model {

    /**
     * Bank table for this model
     * @var string
     */
    protected $table = 'questions';

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
        'dimension_id',
        'question',
        'status',
        'deleted'
    ];

    /**
     * Disable timestamps
     * @var bool
     */
    public $timestamps = true;

    /**
     * Validation Rules for Table Fields
     * @var array
     */
    const RULE_QUESTIONS = [
        'dimension_id' => 'required',
        'question' => 'required|max:255',
        'status' => 'required|boolean',
    ];

}
